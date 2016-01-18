<?php
    set_time_limit(0);

    $plataforma    = $_SERVER['HTTP_USER_AGENT'];             # "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36"
    $meu_servidor  = $_SERVER['HTTP_HOST'];                   # "187.75.243.139"   -> Onde estão os formulários WEB
    $ip_local      = $_SERVER['SERVER_ADDR'];                 # "192.168.0.2"      -> IP "local" de onde estão os formulários WEB
    $ip_internet   = $_SERVER['REMOTE_ADDR'];                 # "189.102.87.244"   -> Onde os formulários estão sendo chamados (se IP dinâmico, pode oscilar)
    $diretorio_www = $_SERVER['DOCUMENT_ROOT'];               # "/gerensys/www"
    $form_corrente = $_SERVER['SCRIPT_FILENAME'];             # "/gerensys/www/automac/inf.php"
    $meu_local     = gethostbyaddr($_SERVER['REMOTE_ADDR']);  # Identificação do LOCAL. Ex.: "192.168.0.10", "bd3e82d7.virtua.com.br", etc

    if ($ip_local=="192.168.0.2" and date('d/m/Y')=="20/07/2015")
        $plataforma = "Teste de desenvolvimento - ANDROID/iPAD";

    if ($meu_local=="")   $meu_local = "LOCAL_INDEF";

    if (strpos(strtoupper($plataforma),'ANDROID')>0 or strpos(strtoupper($plataforma),'IPAD')>0)
    {
        # Configurações para TABLET, iPAD e SMARTFONE
        $flag_tablet     = 1;
        $TAMANHO_FORM    = 964;
        $TAMANHO_JANELA  = 800;
        $TAMANHO_FONTE   = 7;
        $TAMANHO_IMAGEM  = 250;
        $TAMANHO_ICONE   = 150;
        $TAM_IMAGEM_ACAO = 100;
        $ESPACOS_CHAR    = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        $SALTO_LINHA5    = "<br><br><br><br><br>";
        $SALTO_LINHA2    = "<br><br>";

        $config_mensagem = 'TABLET';
        $tamanho_lampada = '90';
    }   else
    {
        # Configurações para WINDOWS
        $flag_tablet     = 0;
        $TAMANHO_FORM    = 370;
        $TAMANHO_JANELA  = 300;
        $TAMANHO_FONTE   = 4;
        $TAMANHO_IMAGEM  = 90;
        $TAMANHO_ICONE   = 50;
        $TAM_IMAGEM_ACAO = 30;
        $ESPACOS_CHAR    = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        $SALTO_LINHA5    = "<br>";
        $SALTO_LINHA2    = "";

        $config_mensagem = 'COMPUTADOR';
        $tamanho_lampada = '40';
    }

   # abre_banco($servidor_mysql, $banco_mysql, $usuario_mysql, $senha_mysql)  - parâmetros opcionais
   # fecha_banco()                 # CLOSE DATA
   # instrucao_sql()               # "SELECT ..."
   # busca($comparacao)            # LOCATE (posiciona o $RECNO_MySQL referente ao registro encontrado)
   # le_campo($nome_campo)
   # skip_sql($movimento)          # SKIP
   # scatter_memvar()              # SCATTER MEMVAR
   # gather_memvar($comp, $tabela) # GATHER MEMVAR ( $m_<campo> )
   # ponteiro_registro($registro)  # GOTO
   # prepara_stringSQL($texto_SQL)
   $RECNO_MySQL     = 0;           # RECNO()
   $RECCOUNT_MySQL  = 0;           # RECCOUNT()
   $FOUND_MySQL     = 0;           # FOUND()
   $EOF_MySQL       = 1;           # EOF()
   $BOF_MySQL       = 0;           # BOF()

   # mensagem_erro($mensagem, $botao_mensagem)
   # mesext($numero_mes)
   # maiusculo($local)
   # corrige($local)
   # padrao_str($local)
   # valida_data($test_data)
   # dtos($test_data)
   # stod($test_data,$centena_anos)
   # tiratags($check_texto)
   # converte_ascii($check_string)                      -> Transforma os caracteres ASCII em símbolos HTML
   # converte_html($check_string)
   # strzero($n_numero,$n_qtdezeros)
   # formata_valor($numero)                             -> No INPUT, põe os "centavos" em um número (e, opcionalmente, separa os milhares)
   # f_fracao($numero,$max_decimais, $min_decimais)     -> No INPUT, limita a quantidade de casas decimais em um número
   # f_personalizar($ident_empresa)
   # direita($ponto_corte, $string_corte)
   # esquerda($ponto_corte, $string_corte)
 
   # Declarações públicas
   $io_arq        = fopen('local/sql_conf.ini','r');
   $s_servidor    = fgets($io_arq,200);
   $s_bcodados    = fgets($io_arq,200);
   $s_bcouser     = fgets($io_arq,200);
   $s_bcopassw    = fgets($io_arq,200);
   $s_empresa     = fgets($io_arq,200);
   $s_reduzido    = fgets($io_arq,200);
   $s_endereco    = fgets($io_arq,200);
   $s_cidade      = fgets($io_arq,200);
   $s_estado      = fgets($io_arq,200);
   $s_cep         = fgets($io_arq,200);
   $s_cgc         = fgets($io_arq,200);
   $s_inscr_est   = fgets($io_arq,200);
   $s_telefone    = fgets($io_arq,200);
   $s_fone2       = fgets($io_arq,200);
   $s_fone3       = fgets($io_arq,200);
   $s_fax         = fgets($io_arq,200);
   $s_site        = fgets($io_arq,200);
   $_GRUPO        = fgets($io_arq,200);
   $_SUBGRUPO     = fgets($io_arq,200);
   $_SETOR        = fgets($io_arq,200);
   $_FILTRO_PROD  = fgets($io_arq,200);
   $_FILTRO_COMP  = fgets($io_arq,200);
   $_LOCAL_WEB    = fgets($io_arq,200);
   $_SERV_AUTOMAC = fgets($io_arq,200);
   fclose($io_arq);

   # local/sql_conf.ini - EXEMPLO:
   #                      Servidor        = 187.75.243.139
   #                      Banco de Dados  = automac
   #                      Usuário         = root
   #                      Senha           = 070396
   #                      Empresa         = Gerensys Automação Comercial
   #                      Nome fantasia   = SANKYM
   #                      Endereço        = RUA ATUCURI, 515 - VILA CARRAO
   #                      Cidade          = São Paulo
   #                      Estado (UF)     = SP
   #                      CEP             = 03411-000
   #                      CNPJ            = 57.821.209/0001-33
   #                      Inscr. Estadual = 109.327.670.118
   #                      Telefone 1      = (11) 2293-3617
   #                      Telefone 2      = 
   #                      Telefone 3      = 
   #                      FAX             = 2097-2600
   #                      WEB Site        = www.gerensys.com.br
   #                      Leg. GRUPO      = Tipo
   #                      Leg. SUBGRUPO   = Fabricante
   #                      Leg. SETOR      = Setor
   #                      Filtro Vendas   = locate(left(descr,1),'#_')=0
   #                      Filtro Compras  = 
   #                      Endereço WEB    = http://187.75.243.139/automac/
   #                      Servidor LINUX  = /gerensys/sistema/automac/

   $s_servidor    =                trim(substr($s_servidor,   strpos($s_servidor,   '=')+1, 100));
   $s_bcodados    =                trim(substr($s_bcodados,   strpos($s_bcodados,   '=')+1, 100));
   $s_bcouser     =                trim(substr($s_bcouser,    strpos($s_bcouser,    '=')+1, 100));
   $s_bcopassw    =                trim(substr($s_bcopassw,   strpos($s_bcopassw,   '=')+1, 100));
   $s_empresa     = converte_ascii(trim(substr($s_empresa,    strpos($s_empresa,    '=')+1, 100)),0);
   $s_reduzido    = converte_ascii(trim(substr($s_reduzido,   strpos($s_reduzido,   '=')+1, 100)),0);
   $s_endereco    = converte_ascii(trim(substr($s_endereco,   strpos($s_endereco,   '=')+1, 100)),0);
   $s_cidade      = converte_ascii(trim(substr($s_cidade,     strpos($s_cidade,     '=')+1, 100)),0);
   $s_estado      =                trim(substr($s_estado,     strpos($s_estado,     '=')+1, 100));
   $s_cep         =                trim(substr($s_cep,        strpos($s_cep,        '=')+1, 100));
   $s_cgc         =                trim(substr($s_cgc,        strpos($s_cgc,        '=')+1, 100));
   $s_inscr_est   = converte_ascii(trim(substr($s_inscr_est,  strpos($s_inscr_est,  '=')+1, 100)),0);
   $s_telefone    = converte_ascii(trim(substr($s_telefone,   strpos($s_telefone,   '=')+1, 100)),0);
   $s_fone2       = converte_ascii(trim(substr($s_fone2,      strpos($s_fone2,      '=')+1, 100)),0);
   $s_fone3       = converte_ascii(trim(substr($s_fone3,      strpos($s_fone3,      '=')+1, 100)),0);
   $s_fax         = converte_ascii(trim(substr($s_fax,        strpos($s_fax,        '=')+1, 100)),0);
   $s_site        =                trim(substr($s_site,       strpos($s_site,       '=')+1, 100));
   $_GRUPO        = converte_ascii(trim(substr($_GRUPO,       strpos($_GRUPO,       '=')+1, 100)),0);
   $_SUBGRUPO     = converte_ascii(trim(substr($_SUBGRUPO,    strpos($_SUBGRUPO,    '=')+1, 100)),0);
   $_SETOR        = converte_ascii(trim(substr($_SETOR,       strpos($_SETOR,       '=')+1, 100)),0);
   $_FILTRO_PROD  =                trim(substr($_FILTRO_PROD, strpos($_FILTRO_PROD, '=')+1, 100));
   $_FILTRO_COMP  =                trim(substr($_FILTRO_COMP, strpos($_FILTRO_COMP, '=')+1, 100));
   $_LOCAL_WEB    =                trim(substr($_LOCAL_WEB,   strpos($_LOCAL_WEB,   '=')+1, 100));
   $_SERV_AUTOMAC =                trim(substr($_SERV_AUTOMAC,strpos($_SERV_AUTOMAC,'=')+1, 100));

   if ($URL_Origem=='') echo '<br>Vari&#225;vel "$URL_Origem" indefinida!<br>';

   if ($start_URL=="START" or $start_URL=="Pedido de Venda")
   {
       $io_arq  = fopen('local/automac.web','r');
       for ($check_inf=1; $check_inf<8; $check_inf++)
       {
          $c_LinhaTMP = fgets($io_arq,200);
       }
       $start_web = fgets($io_arq,200);
       fclose($io_arq);

       switch($start_URL)
       {
              case 'START':
                   $start_web = substr($start_web,strpos($start_web,"*"),200);           break;
              case 'Pedido de Venda':
                   $start_web = trim(substr($start_web,strpos($start_web,">")+1,200));   break;
       }
   }
   
   $ID_ConexaoMySQL = '';    # ID de conexão com o MySQL
   $ID_InstrucaoSQL = '';    # ID da instrução SQL
   
   function abre_banco($servidor_mysql, $banco_mysql, $usuario_mysql, $senha_mysql, $silencioso)
   {
      global $s_servidor;
      global $s_bcodados;
      global $s_bcouser;
      global $s_bcopassw;
      global $ID_ConexaoMySQL;

      global $destino_especial_MySQL;   # Especifica um servidor e banco de dados a ser usado no lugar da abertura PADRÃO. Exemplo: "ip/v_automac"

      if ($servidor_mysql=='' and $banco_mysql=='' and strpos($destino_especial_MySQL,"/")>0)
      {
          $servidor_mysql = substr($destino_especial_MySQL, 0, strpos($destino_especial_MySQL,"/"));
          $banco_mysql    = trim(substr($destino_especial_MySQL, strpos($destino_especial_MySQL,"/")+1, 50));
      }

      if ($servidor_mysql=='')  $servidor_mysql = $s_servidor;
      if ($banco_mysql=='')     $banco_mysql    = $s_bcodados;
      if ($usuario_mysql=='')   $usuario_mysql  = $s_bcouser;
      if ($senha_mysql=='')     $senha_mysql    = $s_bcopassw;
      if ($silencioso=='')      $silencioso     = 0;

      $ID_ConexaoMySQL = mysql_connect($servidor_mysql, $usuario_mysql, $senha_mysql);
      $log_sql         = mysql_error();
      if ($log_sql != '')  
      {
          $ID_ConexaoMySQL = '';
          if ($silencioso==0) mensagem_erro('O servidor "'.$servidor_mysql.'" est&#225; inacess&#237;vel nesse momento! Tente mais tarde!<br>('.$log_sql.')','imagens/desistir.bmp');
          return 0;
      }

      $id_BDados = mysql_select_db($banco_mysql);
      $log_sql   = mysql_error();
      if ($log_sql != '')
      {
          mysql_close();
          $ID_ConexaoMySQL = '';
          if ($silencioso==0) mensagem_erro('O banco de dados "'.$banco_mysql.'" est&#225; inacess&#237;vel nesse momento! Tente mais tarde!<br>('.$log_sql.')','imagens/desistir.bmp');
          return 0;
      }

      return 1;
   }

   function fecha_banco()
   {
      mysql_close();
      $ID_ConexaoMySQL = '';
      $ID_InstrucaoSQL = '';
      return 1;
   }
   
   function instrucao_sql($instrucao_mysql, $silencioso)
   {
      global $ID_InstrucaoSQL;
      global $ID_ConexaoMySQL;
      global $RECNO_MySQL;
      global $RECCOUNT_MySQL;
      global $FOUND_MySQL;
      global $EOF_MySQL;
      global $BOF_MySQL;

      $RECNO_MySQL     = 0;
      $RECCOUNT_MySQL  = 0;
      $FOUND_MySQL     = 0;
      $EOF_MySQL       = 1;
      $BOF_MySQL       = 0;
      
      if ($ID_ConexaoMySQL=='')
      {
          $ID_InstrucaoSQL = '';
          return 0;
      }
      
      if ($silencioso=="")  $silencioso = 0;

      $ID_InstrucaoSQL = mysql_query($instrucao_mysql, $ID_ConexaoMySQL);
      $log_sql         = mysql_error();
      if ($log_sql != '')
      {
          $ID_InstrucaoSQL = '';
          if ($silencioso==0)  mensagem_erro($log_sql.' - QUERY=['.$instrucao_mysql.']','imagens/desistir.bmp');
          return 0;
      } 

      if (substr(strtoupper($instrucao_mysql),0,7)=='SELECT ' or substr(strtoupper($instrucao_mysql),0,5)=='SHOW ')
      {
          $EOF_MySQL      = 0;
          $RECNO_MySQL    = 1;
          $RECCOUNT_MySQL = mysql_num_rows($ID_InstrucaoSQL);
          if ($RECCOUNT_MySQL==0) 
          {   
                 $RECNO_MySQL = 0;
                 $EOF_MySQL   = 1;
                 $BOF_MySQL   = 1;
          } else $FOUND_MySQL = 1;
      }

      return 1;
   }   

   function busca($campo_sql, $comparacao)
   {
      global $ID_InstrucaoSQL;
      global $RECNO_MySQL;
      global $RECCOUNT_MySQL;
      global $FOUND_MySQL;

      $campo_sql   = "SQL_".$campo_sql;
      $comparacao  = padrao_str($comparacao);
      $tam_pesqSQL = strlen($comparacao);
      $busca_ok    = 0;

      $qtde_campos = mysql_num_fields($ID_InstrucaoSQL);
      for ($num_campo=1; $num_campo<=$qtde_campos; $num_campo++)
      {
           $o_campo = mysql_fetch_field($ID_InstrucaoSQL, ($num_campo-1));
           $a_campo[$num_campo] = $o_campo->name;
      }

      $movimento = 1;
      while ($movimento<=$RECCOUNT_MySQL)
      {
             for ($num_campo=1; $num_campo<=$qtde_campos; $num_campo++)
             {
                  $inf_campo  = "SQL_".$a_campo[$num_campo];
                  $$inf_campo = mysql_result($ID_InstrucaoSQL, ($movimento - 1), $a_campo[$num_campo]);
             }
             if (substr(padrao_str($$campo_sql), 0, $tam_pesqSQL)==$comparacao)
             {
                $RECNO_MySQL = $movimento;
                $busca_ok    = 1;
                break;
             }

             $movimento++;
      }
      
      $FOUND_MySQL = $busca_ok;
      
      return $busca_ok;
   }
   
   function le_campo($nome_campo)
   {
      global $ID_InstrucaoSQL;
      global $RECNO_MySQL;
      global $RECCOUNT_MySQL;

      if ($RECCOUNT_MySQL==0 or $RECNO_MySQL>$RECCOUNT_MySQL)     return '';
      else {
              $retorno_campo = mysql_result($ID_InstrucaoSQL, ($RECNO_MySQL - 1), $nome_campo);
              return converte_ascii($retorno_campo);
           }
   }

   function skip_sql($movimento)
   {
      global $RECNO_MySQL;
      global $RECCOUNT_MySQL;
      global $EOF_MySQL;
      global $BOF_MySQL;

      if ($movimento=='')   $movimento = 1;
      $movimento = (int) $movimento;

      if (($movimento>0 and $RECNO_MySQL<=$RECCOUNT_MySQL) or ($movimento<0 and $RECNO_MySQL>0))    $RECNO_MySQL = $RECNO_MySQL + $movimento;
      
      if ($RECNO_MySQL==0)               $BOF_MySQL = 1;
      else                               $BOF_MySQL = 0;

      if ($RECNO_MySQL>$RECCOUNT_MySQL)  $EOF_MySQL = 1;
      else                               $EOF_MySQL = 0;

      return 1;
   }

   function ponteiro_registro($registro)
   {
      global $RECNO_MySQL;
      global $RECCOUNT_MySQL;
      global $EOF_MySQL;
      global $BOF_MySQL;

      if ($registro<1 or $registro=='') $registro = 1;

      if ($registro<=$RECCOUNT_MySQL)   $RECNO_MySQL = $registro;
      else                              $RECNO_MySQL = $RECCOUNT_MySQL;

      $EOF_MySQL = 0;
      $BOF_MySQL = 0;

      return 1;
   }

   /* ***** SCATTER MEMVAR ***** */
   function scatter_memvar()
   {
      global $ID_InstrucaoSQL;
      global $RECNO_MySQL;

      $qtde_campos = mysql_num_fields($ID_InstrucaoSQL);
      for ($num_campo=1; $num_campo<=$qtde_campos; $num_campo++)
      {
           $o_campo    = mysql_fetch_field($ID_InstrucaoSQL, ($num_campo-1));
           $coluna_sql = $o_campo->name;                                                    # Nome do campo
           $memvar_var = "m_".$coluna_sql;                                                  # Nome da variável
           $inf_campo  = mysql_result($ID_InstrucaoSQL, ($RECNO_MySQL - 1), $coluna_sql);   # Conteudo do campo

           global $$memvar_var;

           $$memvar_var = $inf_campo;
      }

      return 1;
   }


   /* ***** GATHER MEMVAR ***** */
   function gather_memvar($tabela, $sql_comparacao, $retorno)
   {
      global $ID_ConexaoMySQL;

      $ID_InstrucaoSQL = mysql_query('show columns from '.$tabela, $ID_ConexaoMySQL);
      $log_sql         = mysql_error();
      if ($log_sql != '')
      {
          $ID_InstrucaoSQL = '';
          mensagem_erro($log_sql.' - (gather_memvar) "show columns from '.$tabela.'"','imagens/desistir.bmp');
          return ($retorno!="" ? "" : 0);
      } 

      $campo_1SQL  = "";   # Nome do primeiro campo da tabela (para fazer o SELECT apenas dele)
      $c_lista_CMP = "";   # Lista dos campos para o comando INSERT
      $c_lista_VAR = "";   # Dados respectivos à lista dos campos para o comando INSERT
      $c_updateSQL = "";   # Sequencia de campos e dados para o comando UPDATE

      if (mysql_num_rows($ID_InstrucaoSQL) > 0) 
      {
          while ($a_coluna = mysql_fetch_assoc($ID_InstrucaoSQL)) 
          {
                 $coluna_sql = $a_coluna[Field];    # Nome do campo
                 $memvar_var = "m_".$coluna_sql;    # Nome da variável
                 
                 global $$memvar_var;

                 if ($campo_1SQL=="")  $campo_1SQL = $coluna_sql;
                 
                 $memvar_inf  = $$memvar_var;       # Dado da variável, caso esta exista
                 $c_insertINF = "";                 # Dado formatado para o comando INSERT ou UPDATE

                 if (strtolower(substr($a_coluna[Type],0,3))=="int" or 
                     strtolower(substr($a_coluna[Type],0,3))=="sma" or
                     strtolower(substr($a_coluna[Type],0,3))=="big" or
                     strtolower(substr($a_coluna[Type],0,3))=="flo" or
                     strtolower(substr($a_coluna[Type],0,3))=="dec")
                 {
                     if (strpos($memvar_inf,",")>0) $memvar_inf  = substr($memvar_inf,0,strpos($memvar_inf,",")).".".trim(substr($memvar_inf,strpos($memvar_inf,",")+1,8));
                     if ($memvar_inf!=0)            $c_insertINF = $memvar_inf;
                 }   else
                 {
                     if ($memvar_inf!="")
                     {  
                         if (strtolower(substr($a_coluna[Type],0,3))=="dat" and strpos($memvar_inf,"/")==2) $memvar_inf = substr($memvar_inf,6,4)."-".
                                                                                                                          substr($memvar_inf,3,2)."-".
                                                                                                                          substr($memvar_inf,0,2);
                         $c_insertINF = "'".prepara_stringSQL($memvar_inf)."'";
                     }
                 }
                 
                 if ($c_insertINF!="")
                 {
                     $c_lista_CMP = $c_lista_CMP.($c_updateSQL=="" ? "" : ",").$coluna_sql;
                     $c_lista_VAR = $c_lista_VAR.($c_updateSQL=="" ? "" : ",").$c_insertINF;
                     $c_updateSQL = $c_updateSQL.($c_updateSQL=="" ? "" : ",").$coluna_sql."=".$c_insertINF;
                 }
          }
      }

      if ($campo_1SQL=="")  return ($retorno!="" ? "" : 0);
      if ($retorno!="")     $campo_1SQL = $retorno;
      
      $r_gatherOK    = 1;
      $instrucao_SQL = "insert into ".$tabela." (".$c_lista_CMP.") values (".$c_lista_VAR.")";
      
      if ($sql_comparacao!="")
      {
          $ID_InstrucaoSQL = mysql_query("select ".$campo_1SQL." from ".$tabela." where ".$sql_comparacao, $ID_ConexaoMySQL);
          $log_sql         = mysql_error();
          if ($log_sql != '')
          {
              $ID_InstrucaoSQL = '';
              mensagem_erro($log_sql." - (gather_memvar) select ".$campo_1SQL." from ".$tabela." where ".$sql_comparacao,'imagens/desistir.bmp');
              return ($retorno!="" ? "" : 0);
          } 
      
          if (mysql_num_rows($ID_InstrucaoSQL)>0) 
          {
              if ($retorno!="")  $r_gatherOK = mysql_result($ID_InstrucaoSQL, 0, $retorno);

              $instrucao_SQL = "update ".$tabela." set ".$c_updateSQL." where ".$sql_comparacao;
          }
      }
      
      $ID_InstrucaoSQL = mysql_query($instrucao_SQL, $ID_ConexaoMySQL);
      $log_sql         = mysql_error();
      if ($log_sql != '')
      {
          $ID_InstrucaoSQL = '';
          mensagem_erro($log_sql." - (gather_memvar) ".$instrucao_SQL,'imagens/desistir.bmp');
          return ($retorno!="" ? "" : 0);
      } 

      if ($retorno!="" and strpos($instrucao_SQL,") values (")>0)
      {
          $ID_InstrucaoSQL = mysql_query("select ".$retorno." from ".$tabela." where ".$sql_comparacao, $ID_ConexaoMySQL);
          $log_sql         = mysql_error();
          if ($log_sql != '')
          {
              $ID_InstrucaoSQL = '';
              mensagem_erro($log_sql." - (gather_memvar) select ".$campo_1SQL." from ".$tabela." where ".$sql_comparacao,'imagens/desistir.bmp');
              return "";
          }
          if (mysql_num_rows($ID_InstrucaoSQL)==0) return "";

          $r_gatherOK = mysql_result($ID_InstrucaoSQL, 0, $retorno);
      }
      
      return $r_gatherOK;
   }
   

   /* ***** Tira as áspas simples e duplas da string que comporá o comando INSERT ou UPDATE ***** */
   function prepara_stringSQL($texto_SQL)
   { 
       $texto_Ok = trim(str_replace('"',chr(180),$texto_SQL));
       $texto_Ok = str_replace("'",chr(180),$texto_Ok);
       return $texto_Ok;
   }


   function mensagem_erro($mensagem, $botao_mensagem)
   {
        global $URL_Origem;
        global $config_mensagem;
        global $tamanho_lampada;
        global $compl_MSG;
        
        if ($config_mensagem=='TABLET')
        {   $size_win = '600';
            $size_tit = '7';
            $size_msg = '6';
            $size_img = '220';
        }   else    
        {   $size_win = '450';
            $size_tit = '3';
            $size_msg = '2';
            $size_img = '130';
        }
        
        $LOCAL_IMAGENS = (file_exists('imagens/alerta.gif') ? "imagens/" : "../imagens/");
        
        if ($tamanho_lampada=='')   $tamanho_lampada = 40;
        if ($botao_mensagem=='')    $botao_mensagem  = 'Cancelar';
        
        echo "<br><br><br><br><br><br>
              <form action='".$URL_Origem."' method='post'>
              <table border='1' cellspacing='0' cellpadding='2' rules='none' align='center' width='".$size_win."' bgcolor='FFFFFF'>
              <tr>
                  <td width='100%' align='center' colspan='2'>
                     <br><font face='Arial' size='".$size_tit."' color='red'><b><u>ATEN&#199;&#195;O!</u></b></font>
                  </td>
              </tr>
              <tr>
                  <td width='15%' align='center'>
                     <img src='".$LOCAL_IMAGENS."alerta.gif' border='0' width='".$tamanho_lampada."' lowsrc>
                  </td>
                  <td width='85%' align='center'>
                     <font face='Arial' size='".$size_msg."' color='black'><br><b>".$mensagem."</b><br>&nbsp;</font>
                  </td>
              </tr>
              <tr>
                 <td width='100%' align='right' colspan='2'>";
                    echo ($tamanho_lampada>1 ? "<img src='".$LOCAL_IMAGENS."mens_txt.bmp' border='0' width='".$tamanho_lampada."' lowsrc>" : "&nbsp;");
        echo "   </td>
              </tr>
              <tr>";

        echo "<td width='100%' bgcolor='darkblue' align='left' colspan='2'>&nbsp;<br>";

        if (strpos(strtolower($botao_mensagem),'.jpg')>0 or strpos(strtolower($botao_mensagem),'.bmp')>0)
        {
             if (strpos($botao_mensagem,"gens/")>0)  $botao_mensagem = $LOCAL_IMAGENS.trim(substr($botao_mensagem,8,30));
             echo "&nbsp;&nbsp;&nbsp; <input type='image' src='".$botao_mensagem."' width='".$size_img."' />";
        }
        else echo "&nbsp;&nbsp;&nbsp; <input type='submit' value=' ".$botao_mensagem." ' class='button' />";

        echo "<br>&nbsp;</td></tr></table>";

        if ($compl_MSG!='')
        {
            echo "<table border='0' cellspacing='0' cellpadding='0' rules='none' align='center' width='".$size_win."' bgcolor='E0EAEC'>
                  <tr><td width='100'>".$compl_MSG."</td></tr>
                  </table>";
        }

        echo "</form>";
        return;
   }

   function mesext($numero_mes)
   {
       if (strpos($numero_mes,"/")>0) { $chk_data = $numero_mes;   $numero_mes = (int) substr($chk_data,3,2);  }
       if (strpos($numero_mes,"-")>0) { $chk_data = $numero_mes;   $numero_mes = (int) substr($chk_data,5,2);  }

       $numero_mes = (int) $numero_mes;

       while ($numero_mes>12)         { $numero_mes = $numero_mes - 12; }
       while ($numero_mes<1)          { $numero_mes = $numero_mes + 12; }
       
       $a_mes[ 1]='Janeiro';
       $a_mes[ 2]='Fevereiro';
       $a_mes[ 3]='Mar&#231;o';
       $a_mes[ 4]='Abril';
       $a_mes[ 5]='Maio';
       $a_mes[ 6]='Junho';
       $a_mes[ 7]='Julho';
       $a_mes[ 8]='Agosto';
       $a_mes[ 9]='Setembro';
       $a_mes[10]='Outubro';
       $a_mes[11]='Novembro';
       $a_mes[12]='Dezembro';

       return $a_mes[$numero_mes];
   }

   function maiusculo($local)
   {
       $local       = trim($local);
       $local_upper = '';

       for ($letra=0; $letra<strlen($local); $letra++)
       {
          $letra_upper = strtoupper(substr($local,$letra,1));
          if (ord($letra_upper)==195 and ord(substr($local,$letra+1,1))>101 and ord(substr($local,$letra+1,1))<195)
          {
              $cod_ascii   = ord(substr($local,$letra+1,1));
              $letra_upper = chr($cod_ascii+64);
              $letra++;
          }

          switch ($letra_upper)
          {
              case 'á':
                   $letra_upper = 'Á'; break;
              case 'ã':
                   $letra_upper = 'Ã'; break;
              case 'â':
                   $letra_upper = 'Â'; break;
              case 'é':
                   $letra_upper = 'É'; break;
              case 'ê':
                   $letra_upper = 'Ê'; break;
              case 'í':
                   $letra_upper = 'Í'; break;
              case 'ó':
                   $letra_upper = 'Ó'; break;
              case 'õ':
                   $letra_upper = 'Õ'; break;
              case 'ô':
                   $letra_upper = 'Ô'; break;
              case 'ú':
                   $letra_upper = 'Ú'; break;
              case 'ç':
                   $letra_upper = 'Ç'; break;
          }

          $local_upper = $local_upper.$letra_upper;
       }

       return $local_upper;
   }


   function corrige($local)
   {
       $local       = converte_html($local);
       $local_upper = '';

       for ($letra=0; $letra<strlen($local); $letra++)
       {
          $letra_upper = substr($local,$letra,1);
          if (ord($letra_upper)==195 and ord(substr($local,$letra+1,1))>101 and ord(substr($local,$letra+1,1))<195)
          {
              $cod_ascii   = ord(substr($local,$letra+1,1));
              $letra_upper = chr($cod_ascii+64);
              $letra++;
          }

          switch ($letra_upper)
          {
              case 'á':
                   $letra_upper = 'a'; break;
              case 'ã':
                   $letra_upper = 'a'; break;
              case 'â':
                   $letra_upper = 'a'; break;
              case 'é':
                   $letra_upper = 'e'; break;
              case 'ê':
                   $letra_upper = 'e'; break;
              case 'í':
                   $letra_upper = 'i'; break;
              case 'ó':
                   $letra_upper = 'o'; break;
              case 'õ':
                   $letra_upper = 'o'; break;
              case 'ô':
                   $letra_upper = 'o'; break;
              case 'ú':
                   $letra_upper = 'u'; break;
              case 'ç':
                   $letra_upper = 'c'; break;

              case 'Á':
                   $letra_upper = 'A'; break;
              case 'À':
                   $letra_upper = 'A'; break;
              case 'Ã':
                   $letra_upper = 'A'; break;
              case 'É':
                   $letra_upper = 'E'; break;
              case 'Ê':
                   $letra_upper = 'E'; break;
              case 'Ô':
                   $letra_upper = 'O'; break;
              case 'Õ':
                   $letra_upper = 'O'; break;
              case 'Ó':
                   $letra_upper = 'O'; break;
              case 'Ú':
                   $letra_upper = 'U'; break;
              case 'Ç':
                   $letra_upper = 'C'; break;
          }

          $local_upper = $local_upper.$letra_upper;
       }

       return $local_upper;
   }
   

   function padrao_str($local, $minusculo)
   {
       $local       = converte_html(trim($local));
       $local_upper = '';
       
       if ($minusculo=="")  $minusculo = 0;

       for ($letra=0; $letra<strlen($local); $letra++)
       {
          $letra_upper = substr(maiusculo($local),$letra,1);

          switch ($letra_upper)
          {
              case 'Á':
                   $letra_upper = 'A'; break;
              case 'À':
                   $letra_upper = 'A'; break;
              case 'Ã':
                   $letra_upper = 'A'; break;
              case 'É':
                   $letra_upper = 'E'; break;
              case 'Ê':
                   $letra_upper = 'E'; break;
              case 'Ô':
                   $letra_upper = 'O'; break;
              case 'Õ':
                   $letra_upper = 'O'; break;
              case 'Ó':
                   $letra_upper = 'O'; break;
              case 'Ú':
                   $letra_upper = 'U'; break;
              case 'Ç':
                   $letra_upper = 'C'; break;
              case 'á':
                   $letra_upper = 'A'; break;
              case 'à':
                   $letra_upper = 'A'; break;
              case 'ã':
                   $letra_upper = 'A'; break;
              case 'é':
                   $letra_upper = 'E'; break;
              case 'ê':
                   $letra_upper = 'E'; break;
              case 'ô':
                   $letra_upper = 'O'; break;
              case 'õ':
                   $letra_upper = 'O'; break;
              case 'ó':
                   $letra_upper = 'O'; break;
              case 'ú':
                   $letra_upper = 'U'; break;
              case 'ç':
                   $letra_upper = 'C'; break;
          }
   
          if (ord($letra_upper)<48 or ord($letra_upper)>57)
          {   if (ord($letra_upper)<65 or ord($letra_upper)>90)  $letra_upper='';   }

          $local_upper = $local_upper.$letra_upper;
       }

       if ($minusculo==1)    $local_upper = strtolower($local_upper);

       return $local_upper;
   }

   function ultimo_dia($test_mes,$test_ano)
   {
       if ($test_mes==1 or $test_mes==3 or $test_mes==5 or $test_mes==7 or $test_mes==8 or $test_mes==10 or $test_mes==12) return 31;
       if ($test_mes==4 or $test_mes==6 or $test_mes==9 or $test_mes==11) return 30;
       if ($test_mes==2 and $test_ano%400==0) return 29;
       if ($test_mes==2 and $test_ano%100==0) return 28;        
       if ($test_mes==2 and $test_ano%4==0)   return 29; else return 28; 
   }


   # Retorna a data no formato "99/99/9999" ou "Inválida"
   function valida_data($test_data)
   {
      $test_data = trim($test_data);
      if (strlen($test_data)==0) return '';
      
      if (strpos($test_data,'/')==1   or strpos($test_data,'-')==1)    $test_data = '0'.$test_data;
      if (substr($test_data,4,1)=='/' or substr($test_data,4,1)=='-')  $test_data = substr($test_data,0,3).'0'.substr($test_data,3,6);

      # PRIMEIRO: Tiramos todos os caracteres que dividem os dígitos do calendário
      $retira_car = '/\-.;:,_|';
      for ($poscarret=0; $poscarret<strlen($retira_car); $poscarret++)
      {
         $test_car = substr($retira_car,$poscarret,1);
         while (strpos($test_data,$test_car)>0)   
               $test_data = substr($test_data,0,strpos($test_data,$test_car)).
                            substr($test_data,strpos($test_data,$test_car)+1,strlen($test_data)-strpos($test_data,$test_car));
      }

      # SEGUNDO: Comparamos o tamanho da data só com os números
      if     (strlen($test_data)<4)   return 'Inv&#225;lida';
      elseif (strlen($test_data)==4)  $test_data = $test_data.date('Y');
      elseif (strlen($test_data)==6)  $test_data = substr($test_data,0,4).'20'.substr($test_data,4,2);
      elseif (strlen($test_data)!=8)  return 'Inv&#225;lida';
      
      $separa_dia = (int) substr($test_data,0,2);
      $separa_mes = (int) substr($test_data,2,2);
      $separa_ano = (int) substr($test_data,4,4);

      # TERCEIRO: Testamos a validade do dia, mês e ano
      if ($separa_dia<1 or $separa_dia>31)       return 'Inv&#225;lida';
      if ($separa_mes<1 or $separa_mes>12)       return 'Inv&#225;lida';
      if ($separa_ano<1800 or $separa_ano>2050)  return 'Inv&#225;lida';

      $fim_mes = ultimo_dia($separa_mes, $separa_ano);

      if ($separa_dia>$fim_mes)  return 'Inv&#225;lida';
 
      return substr($test_data,0,2).'/'.substr($test_data,2,2).'/'.substr($test_data,4,4);
   }


   function dtos($test_data)
   {
      return substr($test_data,6,4).substr($test_data,3,2).substr($test_data,0,2);
   }


   function stod($test_data,$centena_anos)
   {
      return substr($test_data,8,2)."/".substr($test_data,5,2)."/".($centena_anos==1 ? substr($test_data,0,4) : substr($test_data,2,2));
   }


   function tiratags($check_texto)
   {
      while (strpos($check_texto,'<')>0 and strpos($check_texto,'>')>0)
          $check_texto = substr($check_texto,0,strpos($check_texto,'<')).
                         substr($check_texto,strpos($check_texto,'>')+1,strlen($check_texto)-strpos($check_texto,'>'));
      return $check_texto;
   }

   
   # Transforma os caracteres ASCII em símbolos HTML
   function converte_ascii($check_string,$line_feed)
   {
      $string_ajustada = '';
      for ($poscarret=0; $poscarret<strlen($check_string); $poscarret++)
      {
           $test_car = substr($check_string,$poscarret,1);
           
           if     ($line_feed==1 and ord($test_car)==10) $string_ajustada = $string_ajustada.'';
           elseif ($line_feed==1 and ord($test_car)==13) $string_ajustada = $string_ajustada.'<br>';
           elseif (ord($test_car)>126)                   $string_ajustada = $string_ajustada.'&#'.ord($test_car).';';
           else                                          $string_ajustada = $string_ajustada.$test_car;
      }
      return $string_ajustada;
   }


   # Transforma os símbolos HTML em códigos ASCII
   function converte_html($check_string)
   {
      $string_ajustada = '';
      for ($poscarret=0; $poscarret<strlen($check_string); $poscarret++)
      {
           $char_string = substr($check_string,$poscarret,1);
           
           if (ord($char_string)==195 and ord(substr($check_string,$poscarret+1,1))>101 and ord(substr($check_string,$poscarret+1,1))<195)
           {
               $poscarret++;                              # Exemplo: "Ã©"     corresponde a "é"
               $cod_ascii   = ord(substr($check_string,$poscarret,1));
               $char_string = chr($cod_ascii+64);
           }
           
           if (substr($check_string,$poscarret,2)=='&#')  # Exemplo: "&#233;" corresponde a "é"
           {
                 $poscarret = $poscarret + 2;
                 $cod_ascii = '';
                 while (substr($check_string,$poscarret,1)!=';')
                 {
                        $cod_ascii = $cod_ascii.substr($check_string,$poscarret,1);
                        $poscarret = $poscarret + 1;
                 }
                 
                 $string_ajustada = $string_ajustada.chr($cod_ascii);
           }
           else  $string_ajustada = $string_ajustada.$char_string;
      }
      return $string_ajustada;
   }

   # strzero(a,b)
   function strzero($n_numero,$n_qtdezeros)
   {
      while (strpos("??".$n_numero,"_")>0)  $n_numero = substr($n_numero,0,strpos($n_numero,"_")).trim(substr($n_numero,strpos($n_numero,"_")+1,25));
      
      $n_numero  = (int) $n_numero;
      $r_strzero = "000000000000000".$n_numero;
      $r_strzero = substr($r_strzero, strlen($r_strzero)-$n_qtdezeros, $n_qtdezeros);
      return $r_strzero;
   }
   
   
   # No INPUT, põe os "centavos" em um número (e, opcionalmente, separa os milhares)
   function formata_valor($numero,$separa_milhar)
   {
       if ($separa_milhar=="")
       {   
           $separa_dec_yes = ".";
           $separa_dec_not = ",";
       }
       else
       {
           $separa_dec_yes = ",";
           $separa_dec_not = ".";
       }
       
       while (strpos("??".$numero,"_")>0)          $numero = substr($numero,0,strpos($numero,"_")).trim(substr($numero,strpos($numero,"_")+1,25));

       if (strpos("??".$numero,$separa_dec_not)>0) $numero = substr($numero,0,strpos($numero,$separa_dec_not)).$separa_dec_yes.substr($numero."000",strpos($numero,$separa_dec_not)+1,2);
       if (substr($numero,0,1)==$separa_dec_yes)   $numero = "0".$numero;
       if (strpos($numero,$separa_dec_yes)>0)      $numero = trim(substr($numero,0,strpos($numero,$separa_dec_yes)).substr($numero."000",strpos($numero,$separa_dec_yes),3));
       else                                        $numero = trim($numero.$separa_dec_yes."00");
       
       if (substr($numero,0,1)==$separa_dec_yes)   $numero = "0".$numero;
       
       if ($separa_milhar==1)
       {
          if (strlen($numero)> 6)                  $numero = substr($numero,0,strlen($numero)- 6).".".substr($numero,strlen($numero)- 6, 6);
          if (strlen($numero)>10)                  $numero = substr($numero,0,strlen($numero)-10).".".substr($numero,strlen($numero)-10,10);
          if (strlen($numero)>14)                  $numero = substr($numero,0,strlen($numero)-14).".".substr($numero,strlen($numero)-14,14);
       }

       return $numero;
   }


   # No INPUT, limita a quantidade de casas decimais em um número
   function f_fracao($numero, $max_decimais, $min_decimais)
   {
       while (strpos("??".$numero,"_")>0)  $numero = substr($numero,0,strpos($numero,"_")).trim(substr($numero,strpos($numero,"_")+1,25));

       if ($max_decimais=="")       $max_decimais = 6;
       if ($min_decimais=="")       $min_decimais = 0;
       if ($numero=="")             $numero = "0.0";
       if (strpos($numero,",")>0)   $numero = substr($numero,0,strpos($numero,",")).".".substr($numero."00000000",strpos($numero,",")+1,$max_decimais);
       if (strpos($numero,".")==0)  $numero = $numero.".000000000000";

       $numero = substr($numero,0,strpos($numero,".")).".".substr($numero."00000000",strpos($numero,".")+1,$max_decimais);

       while (((strlen($numero)-strpos($numero,"."))-1)>$min_decimais and substr($numero,strlen($numero)-1,1)=="0" and $max_decimais>0)
       {
                $max_decimais--;
                $numero = substr($numero,0,strpos($numero,".")).".".substr($numero."00000000",strpos($numero,".")+1,$max_decimais);
       }
       if (substr($numero,strlen($numero)-1,1)==".") $numero = substr($numero,0,strpos($numero,"."));
       if (substr($numero,0,1)==".")                 $numero = "0".$numero;

       return $numero;
   }
   
   
   function f_personalizar($ident_empresa)
   {
       global $s_empresa;
       global $s_reduzido;

       $esta_personalizado = 0;
       
       if (substr($ident_empresa,strlen($ident_empresa)-1,1)!="+")  $ident_empresa = $ident_empresa."+";

       while (strpos("?".$ident_empresa,"+")>0)
       {
              $qual_empresa = direita("+",$ident_empresa);
              if (strpos("?".padrao_str($s_empresa,1),padrao_str($qual_empresa,1))>0 or strpos("?".padrao_str($s_reduzido,1),padrao_str($qual_empresa,1))>0)  $esta_personalizado = 1;
              $ident_empresa = esquerda("+",$ident_empresa);
       }

       return $esta_personalizado;
   }


   function direita($ponto_corte, $string_corte)
   {
       if (strpos("?".$string_corte,$ponto_corte)==0)   return $string_corte;
       $string_corte = trim(substr($string_corte,0,strpos("?".$string_corte,$ponto_corte)-1));
       return $string_corte;
   }


   function esquerda($ponto_corte, $string_corte)
   {
       if (strpos("?".$string_corte,$ponto_corte)==0)   return $string_corte;
       $string_corte = trim(substr($string_corte,strpos("?".$string_corte,$ponto_corte),250));
       return $string_corte;
   }


   #############################################[ FUNÇÕES DO e-AUTOMAC ]#############################################
   function cabecalho_gerensys($flag_start)
   {
       global $s_empresa;
       global $s_acesso;
       global $local_logo;
       global $Parte_HTML;
       global $_LOCAL_WEB;

       if ($flag_start=="")                    $flag_start = 0;
       if ($local_logo=="")                    $local_logo = "local/hs_logo.bmp";
       if ($Parte_HTML!="")                    $local_logo = $_LOCAL_WEB."local/hs_logo.bmp";
       if ($local_logo=="")                    $local_logo = "local/hs_logo.bmp";

       if ($flag_tablet==0 and $flag_start<1)  return 1;

       $titulo_cabecalho = $s_empresa;
       $cor_barra_cabeca = "0C61E8";
       $cor_letra_cabeca = "yellow";

       if (maiusculo($s_acesso)=="LANCHE")
       {
           $local_logo       = "local/demonstr_alimentacao.bmp";
           $titulo_cabecalho = "Restaurante, Lanchonete, Churrascaria, etc";
       }
       
       if (strpos(">>>>".strtoupper($s_empresa),"W CENTER")>0)
       {
            $titulo_cabecalho = "e-Automac";
            $cor_barra_cabeca = ($flag_start==2 ? "FFFFFF" : "0C61E8");
            $cor_letra_cabeca = ($flag_start==2 ? "black" : "yellow");
       }

       $tags_cabeca = "<table align='center' border='0' width='100%' cellspacing='0' cellpadding='2' rules='none' bgcolor='".$cor_barra_cabeca."'> 
                         <tr bgcolor='darkblue'>
                             <td align='center' width='7%'> &nbsp; </td>
                             <td align='center' width='15%'>
                                <img src='".$local_logo."' style='border-width:0px;' /> 
                             </td>
                             <td align='center' width='71%'>
                                 <font face='Arial' size='6' color='".$cor_letra_cabeca."'> ".$titulo_cabecalho." </font>
                             </td>
                             <td align='center' width='7%'> &nbsp; </td>
                         <tr>
                       </table>";
       
       if ($flag_start==2) return $tags_cabeca;
       else   {
                           echo $tags_cabeca;
                           return 1;
              }
   }

   
   function style_popup($tamanho_janela, $compl_style)
   {
       global $flag_tablet;

       if     ($flag_tablet==1 and $tamanho_janela==(-1))  $ret_StylePopup = "width:40px;height:40px;";                         # Check-box
       elseif ($flag_tablet==1 and $tamanho_janela==(-2))  $ret_StylePopup = "font-size:xx-large;";                             # TextArea (tablet)
       elseif ($flag_tablet==0 and $tamanho_janela==(-2))  $ret_StylePopup = "font-size:medium;";                               # TextArea (Windows)
       elseif ($flag_tablet==1 and $tamanho_janela>0)      $ret_StylePopup = "width:".$tamanho_janela."px;font-size:x-large;";
       elseif ($flag_tablet==1)                            $ret_StylePopup = "font-size:x-large;";
       elseif ($tamanho_janela>0)                          $ret_StylePopup = "width:".$tamanho_janela."px;";
       else                                                $ret_StylePopup = "font-size:small;";
       
       if ($compl_style!="")                               $ret_StylePopup = $ret_StylePopup.$compl_style;
       
       return $ret_StylePopup;
   }
   

   ##############################################################################################################################################

   function f_teste($teste)
   {
       global $s_usuario;
       
       if (strtoupper($s_usuario)=="GERENSYS")
       {
           echo "[".$teste."]<br>";
       }
       
       return;
   }

   
   if (!file_exists("local/sql_conf.ini"))    mensagem_erro('File "sql_conf.ini" is not found!',  "imagens/desistir.bmp");
   if (!file_exists("local/automac.web"))     mensagem_erro('File "automac.web" is not found!',   "imagens/desistir.bmp");
   if (!file_exists("local/hs_logo.bmp"))     mensagem_erro('File "hs_logo.bmp" is not found!',   "imagens/desistir.bmp");
   if (!file_exists("local/serv_smtp.ini"))   mensagem_erro('File "serv_smtp.ini" is not found!', "imagens/desistir.bmp");

?>
