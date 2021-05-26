<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_faturamento extends CI_Model {
    public $table;
    public $schema;
    public $stored;

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    #lista faturamento mes anterior
    function get_faturamento_mes_anterior(){
        $query = $this->db->query("SELECT SUM(VALORORIGINAL) AS VALOR_BRUTO_MES, SUM(VALORBAIXADO) AS VALOR_LIQUIDO_MES, TO_CHAR(TRUNC(DATAVENCIMENTO), 'MM/YYYY') AS DATAVENCIMENTO
        FROM RM.VW_CR_FATURAMENTO WHERE TO_CHAR(TRUNC(DATAVENCIMENTO), 'MM/YYYY') = TO_CHAR(ADD_MONTHS(SYSDATE,-1),'MM/YYYY')
        AND CODTDO = 'MENSAL' AND NVL(CODBOLSA,0) <> 3 AND CODCOLIGADA = 1
        GROUP BY TO_CHAR(TRUNC(DATAVENCIMENTO), 'MM/YYYY')");
        return $query->result_array();
    }

    #lista faturamento mensal
    function get_faturamento_mes(){
        $query = $this->db->query("SELECT SUM(VALORORIGINAL) AS VALOR_BRUTO_MES, SUM(VALORBAIXADO) AS VALOR_LIQUIDO_MES, MESDECOMPETENCIA
        FROM RM.VW_CR_FATURAMENTO WHERE TO_CHAR(MESDECOMPETENCIA, 'MM/YYYY') = TO_CHAR(TRUNC(SYSDATE),'MM/YYYY')
        AND CODTDO = 'MENSAL' AND NVL(CODBOLSA,0) <> 3 AND CODCOLIGADA = 1
        GROUP BY MESDECOMPETENCIA");
    	return $query->result_array();
    }

    #lista faturamento anual
    function get_faturamento_ano(){
        $query = $this->db->query("SELECT SUM(VALOR_BRUTO_ANUAL) AS VALOR_BRUTO_ANUAL, SUM(VALOR_LIQUIDO_ANUAL) AS VALOR_LIQUIDO_ANO, MESDECOMPETENCIA FROM (
            SELECT SUM(VALORORIGINAL) AS VALOR_BRUTO_ANUAL, SUM(VALORBAIXADO) AS VALOR_LIQUIDO_ANUAL, TO_CHAR(MESDECOMPETENCIA, 'YYYY') AS MESDECOMPETENCIA
            FROM RM.VW_CR_FATURAMENTO WHERE TO_CHAR(MESDECOMPETENCIA, 'YYYY') = TO_CHAR(TRUNC(SYSDATE),'YYYY') 
            AND CODTDO = 'MENSAL' AND NVL(CODBOLSA,0) <> 3 AND CODCOLIGADA = 1
            GROUP BY MESDECOMPETENCIA
            ) GROUP BY MESDECOMPETENCIA");
        return $query->result_array();
    }

    #lista custo ou dispesas mes
    function get_dispesas_mes(){
        $query = $this->db->query("SELECT SUM (VALOR_BRUTO) AS VALOR_BRUTO_MES, SUM (VALOR_LIQUIDO)AS VALOR_LIQUIDO_MES, SUM (VLR_LIQ_ABERTO) AS VALOR_LIQUIDO_ABERTO, MESDECOMPETENCIA FROM (
            SELECT 
            SUM(VALORORIGINAL) AS VALOR_BRUTO, SUM(VALORBAIXADO) AS VALOR_LIQUIDO, TO_CHAR(DATAVENCIMENTO, 'MM/YYYY') AS MESDECOMPETENCIA,
            SUM(VALORORIGINAL - VALORDESCONTO - NVL (FLANINTEGRACAO.VALOR,0) + VALORJUROS + VALORMULTA) AS VLR_LIQ_ABERTO
            FROM RM.VW_CP_LANCAMENTO 
            LEFT JOIN RM.FLANINTEGRACAO ON FLANINTEGRACAO.IDLAN=RM.VW_CP_LANCAMENTO.IDLAN  AND FLANINTEGRACAO.IDCAMPO=44
            WHERE TO_CHAR(DATAVENCIMENTO, 'MM/YYYY') = TO_CHAR(TRUNC(SYSDATE),'MM/YYYY') 
            AND RM.VW_CP_LANCAMENTO.CODCOLIGADA = 1
            GROUP BY DATAVENCIMENTO,VALORORIGINAL,VALORBAIXADO)
            GROUP BY MESDECOMPETENCIA");
        return $query->result_array();    
    }

    #lista custo ou dispesas ano
    function get_dispesas_ano(){
        $query = $this->db->query("SELECT SUM (VALOR_BRUTO) AS VALOR_BRUTO_ANO, SUM (VALOR_LIQUIDO)AS VALOR_LIQUIDO_ANO, 
        SUM (VLR_LIQ_ABERTO) AS VALOR_LIQUIDO_ABERTO, MESDECOMPETENCIA FROM (
        SELECT 
        SUM(VALORORIGINAL) AS VALOR_BRUTO, SUM(VALORBAIXADO) AS VALOR_LIQUIDO, TO_CHAR(DATAVENCIMENTO, 'YYYY') AS MESDECOMPETENCIA,
        SUM(VALORORIGINAL - VALORDESCONTO - NVL (FLANINTEGRACAO.VALOR,0) + VALORJUROS + VALORMULTA) AS VLR_LIQ_ABERTO
        FROM RM.VW_CP_LANCAMENTO 
        LEFT JOIN RM.FLANINTEGRACAO ON FLANINTEGRACAO.IDLAN=RM.VW_CP_LANCAMENTO.IDLAN  AND FLANINTEGRACAO.IDCAMPO=44
        WHERE TO_CHAR(DATAVENCIMENTO, 'YYYY') = TO_CHAR(TRUNC(SYSDATE),'YYYY') 
        AND RM.VW_CP_LANCAMENTO.CODCOLIGADA = 1
        GROUP BY DATAVENCIMENTO,VALORORIGINAL,VALORBAIXADO)
        GROUP BY MESDECOMPETENCIA");
        return $query->result_array();
    }

    #lista centro de custo admin
    function get_centro_custo_adm(){
        $query = $this->db->query("SELECT SUBSTR(GC.CODCCUSTO,1,2) AS  CODCCUSTO, TO_CHAR(FL.DATAVENCIMENTO,'YYYY') AS PERIODO, 
        SUM(CC.VALOR) AS VALOR, GC.NOME AS NOME
        FROM RM.FLANRATCCU CC 
        INNER JOIN RM.FLAN FL ON FL.IDLAN = CC.IDLAN
        INNER JOIN RM.GCCUSTO GC ON GC.CODCCUSTO = FL.CODCCUSTO
        WHERE CC.CODCOLIGADA = 1 AND TO_CHAR(FL.DATAVENCIMENTO,'YYYY') = TO_CHAR(TRUNC(SYSDATE), 'YYYY') AND NVL(FL.STATUSLAN,0)<>2 AND 
        FL.PAGREC = 2 AND GC.CODCCUSTO LIKE '01%'  
        GROUP BY SUBSTR(GC.CODCCUSTO,1,2), GC.NOME, TO_CHAR(FL.DATAVENCIMENTO,'YYYY') ORDER BY GC.NOME ASC");
        return $query->result_array();
    }

    #lista centro de custo academico
    function get_centro_custo_aca(){
        $query = $this->db->query("SELECT SUBSTR(GC.CODCCUSTO,1,2) AS  CODCCUSTO, TO_CHAR(FL.DATAVENCIMENTO,'YYYY') AS PERIODO, 
        SUM(CC.VALOR) AS VALOR, 'ACADEMICO' AS NOME
        FROM RM.FLANRATCCU CC 
        INNER JOIN RM.FLAN FL ON FL.IDLAN = CC.IDLAN
        INNER JOIN RM.GCCUSTO GC ON GC.CODCCUSTO = FL.CODCCUSTO
        WHERE GC.CODCOLIGADA = 1 AND TO_CHAR(FL.DATAVENCIMENTO,'YYYY') = TO_CHAR(TRUNC(SYSDATE), 'YYYY') AND NVL(FL.STATUSLAN,0)<>2 AND 
        FL.PAGREC = 2 AND GC.CODCCUSTO LIKE '02%' GROUP BY SUBSTR(GC.CODCCUSTO,1,2), TO_CHAR(FL.DATAVENCIMENTO,'YYYY')");
        return $query->result_array();
    }

    #quantidade de bolsita ano
    function get_quantidade_bolsita($p){
        $query = $this->db->query("SELECT COUNT(*) AS QUANTIDADE
        FROM RM.SBOLSAALUNO SBA
        INNER JOIN RM.SPLETIVO SP ON SP.IDPERLET = SBA.IDPERLET AND SP.CODPERLET = ".$p['p_ano']." 
        INNER JOIN RM.SSERVICO SS ON SS.CODSERVICO = SBA.CODSERVICO
        INNER JOIN RM.SBOLSA SB ON SB.CODBOLSA = SBA.CODBOLSA
        WHERE SS.CODSERVICO = 2 AND SBA.ATIVA = 'S' AND SBA.CODBOLSA = '".$p['p_codbolsa']."' ");
        return $query->result_array();
    } 

    #quantidade de bolsista e desconto
    function get_quantidade_bolsista_desconto($p){
        $query = $this->db->query("SELECT COUNT(*) AS QUANTIDADE
        FROM RM.SBOLSAALUNO SBA
        INNER JOIN RM.SPLETIVO SP ON SP.IDPERLET = SBA.IDPERLET AND SP.CODPERLET = ".$p['p_ano']." 
        INNER JOIN RM.SSERVICO SS ON SS.CODSERVICO = SBA.CODSERVICO
        INNER JOIN RM.SBOLSA SB ON SB.CODBOLSA = SBA.CODBOLSA
        WHERE SS.CODSERVICO = 2 AND SBA.ATIVA = 'S'");
        return $query->result_array();
    }

    #quantidade de alunos integral
    function get_quantidade_aluno_integral($p){
        $query = $this->db->query("SELECT COUNT(*) AS QUANTIDADE
        FROM RM.PPESSOA P
        JOIN RM.SALUNO A ON P.CODIGO = A.CODPESSOA
        JOIN RM.SMATRICPL M ON A.RA = M.RA AND M.CODTURMA <> 'EIM0101'
        JOIN RM.SHABILITACAOFILIAL H ON H.IDHABILITACAOFILIAL = M.IDHABILITACAOFILIAL AND H.CODCURSO <> '001'
        JOIN RM.spletivo SP ON SP.IDPERLET = M.IDPERLET AND SP.CODPERLET = ".$p['p_ano']."
        WHERE M.CODSTATUS = 15");
        return $query->result_array();
    }

    #quantidade de alunos parcial
    function get_quantidade_aluno_parcial($p){
        $query = $this->db->query("SELECT COUNT(*) AS QUANTIDADE
        FROM RM.PPESSOA P
        JOIN RM.SALUNO A ON P.CODIGO = A.CODPESSOA
        JOIN RM.SMATRICPL M ON A.RA = M.RA AND M.CODTURMA = 'EIM0101'
        JOIN RM.SHABILITACAOFILIAL H ON H.IDHABILITACAOFILIAL = M.IDHABILITACAOFILIAL AND H.CODCURSO = '001'
        JOIN RM.spletivo SP ON SP.IDPERLET = M.IDPERLET AND SP.CODPERLET = ".$p['p_ano']."
        WHERE M.CODSTATUS = 15");
        return $query->result_array();
    }

    #quantidade de visitante hoje
    function get_quantidade_visitante_hoje(){
        $query = $this->db->query("SELECT COUNT(*) AS QUANTIDADE
        FROM RM.ZMDVISITA WHERE TO_CHAR(TRUNC(DATAHORA), 'DD/MM/YYYY') = TO_CHAR(TRUNC(SYSDATE), 'DD/MM/YYYY')");
        return $query->result_array();
    }

    #quantidade de visita por semana
    function get_quantidade_visitante_semana(){
        $query = $this->db->query("SELECT COUNT(*) AS QUANTIDADE 
        FROM RM.ZMDVISITA WHERE to_char(to_date(TRUNC(DATAHORA)), 'WW') = to_char(to_date(TRUNC(SYSDATE)), 'WW')");
        return $query->result_array();
    }

    // #quantidade de visitas por mes
    function get_quantidade_visitante_mes(){
        $query = $this->db->query("SELECT COUNT(*) AS QUANTIDADE 
        FROM RM.ZMDVISITA WHERE to_char(to_date(TRUNC(DATAHORA)), 'MM/YYYY') = to_char(to_date(TRUNC(SYSDATE)), 'MM/YYYY')");
        return $query->result_array();
    }

}