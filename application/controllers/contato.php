<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Contato extends CI_Controller{
	
	public function email_send(){
        
            /*----------------CONEXAO BANCO GERENSYS-------------------------*/    
            $host       = "gerensys.dyndns.org";
            $database   = "v_automac";
            $user       = "root";
            $password   = "070396";

            $conexao = mysqli_connect($host,$user,$password,$database);

			//CONTEUDO
			$assunto     = $this->input->post('assunto');
			$nome        = $this->input->post('nome');
            $empresa     = $this->input->post('empresa');
            $segmento    = $this->input->post('segmento');
			$email       = $this->input->post('email');
			$telefone    = $this->input->post('telefone');
			$estado      = $this->input->post('estado');
			$cidade      = $this->input->post('cidade');		
            $bairro      = $this->input->post('bairro');	
			$mensagem    = $this->input->post('mensagem');
            $data        = getdate();
        	
            $assunto_email  = $assunto." - ".$mensagem;
        
            //PREENCHE EMAIL - TABELA
			$insert_email 	    = "INSERT INTO v_automac.site (contato,telefone,empresa,segmento,bairro,cidade,uf,e_mail,site,assunto,data,status) VALUES ('{$nome}','{$telefone}','{$empresa}','{$segmento}','{$bairro}','{$cidade}','{$estado}','{$email}','{$assunto}','{$mensagem}',".$data["year"].$data["mon"].$data["mday"].",1)";
			$email_banco		= mysqli_query($conexao, $insert_email);
                 
            if($email_banco)
            {               
                //PREENCHE ARRAY DE E-MAIL
                $content_email = array(	"assunto" => $assunto,
									"nome" => $nome ,
                                    "empresa" => $empresa ,
                                    "segmento" => $segmento,
									"email" => $email ,
									"telefone" => $telefone,
									"estado" => $estado,
									"cidade" => $cidade,
									"bairro" => $bairro,
                                    "mensagem" => $mensagem);
			
                //PREENCHE HTML EMAIL
                $conteudo = $this->load->view('contato/email_content.php',$content_email, TRUE);

                
                //CONFIGURA E-MAIL
                $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_port' => '465',
                        'smtp_user' => 'andrebonetti2@gmail.com',
                        'smtp_pass' => 'flatron500G',
                        'mailtype'  => 'html',
                        'charset'   => 'utf-8');

                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");

                //SET CONTEUDO
                $this->email->from( $email, $nome);
                $this->email->to('gerensys@gerensys.com.br');

                $this->email->subject("Site Gerensys - ".$assunto);
                $this->email->message($conteudo);

                //RESULTADO
                if($this->email->send()){
                    $msg = "E-mail enviado com sucesso !";
                    $content = array("atualPage" => "Contato",
                            "mensagem" =>	$msg);
                            $this->session->set_flashdata('msg-success',"Email enviado com sucesso!");
                            redirect("");
                }
                else{
                    echo "Erro ao enviar mensagem";
                    echo $this->email->print_debugger();
                }
                     
            }
            else{
                echo "Erro ao enviar mensagem";
            }
		
		}		
}