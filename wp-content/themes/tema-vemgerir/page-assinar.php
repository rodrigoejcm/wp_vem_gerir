<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tema-vemgerir
 */

 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }


	//response messages
	$not_human       = "Human verification incorrect.";
	$missing_content = "Please supply all information.";
	$email_invalid   = "Email Address Invalid.";
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Thanks! Your message has been sent.";
	 
	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$message = $_POST['message_text'];
	$human = $_POST['message_human'];
	 
	//php mailer variables
	$to = get_option('admin_email');
	$subject = "Someone sent a message from ".get_bloginfo('name');
	$headers = 'From: '. $email . "\r\n" .'Reply-To: ' . $email . "\r\n";

	if(!$human == 0){
	  	if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  		else {
	 		//validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			  my_contact_form_generate_response("error", $email_invalid);
			else //email is valid
			{
				//validate presence of name and message
				if(empty($name) || empty($message)){
				  my_contact_form_generate_response("error", $missing_content);
				}
				else //ready to go!
				{
					wp_redirect(get_permalink( get_page_by_title( 'Sucesso' ) ));
					exit;
					/*$sent = wp_mail($to, $subject, strip_tags($message), $headers);
					if($sent) {
						my_contact_form_generate_response("success", $message_sent);
						wp_redirect();
					}
					else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent*/

				}
			}	


	  	}
	}

	else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);



get_header(); ?>

	<div id="primary" class="nhuit-area">
		<main id="main" class="site-main" role="main">
			
	

 
	<div id="respond">
		  <?php echo $response; ?>
		  <form action="<?php the_permalink(); ?>" method="post">
			    <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
			    <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
			    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
			    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
			    <input type="hidden" name="submitted" value="1">
			    <p><input type="submit"></p>
		  </form>
	</div>

	<form name="frm_cad_cliente" id="frm_cad_cliente" action="<?php the_permalink(); ?>" method="post" class="nit_frm_padrao">

		
		<div class="input-group input-group-lg">
    		<input  type="text"  name="nome"  id="nome" class="form-control" placeholder="Nome"/>
		</div>

		<script type="text/javascript">	
									$(function(){
										$("input#cpf").setMask();	 
									});
		</script>

		<div class="input-group input-group-lg">
			<input  type="text"  name="cpf"  id="cpf" class="form-control" placeholder="CPF"  />
		</div>

		<div class="input-group input-group-lg">
			<select  name="sexo"  id="sexo" class="form-control">
				<option selected >Sexo</option>
				<option value="F">Feminino</option>
				<option value="M"> Masculino</option>
			</select> 
		</div>
		
		<div class="input-group input-group-lg">
			<input  type="text"  name="email"  id="email"  class="form-control"  value="" placeholder="E-mail"/>
		</div>

		<div class="input-group input-group">
			<input  type="text"  name="telefone1"  placeholder="Celular"  id="telefone1"    class="form-control"  maxlength="15"/>
		</div>

		<div class="input-group input-group">
			<input  type="text"  name="telefone2"  placeholder="Telefone"  id="telefone2"  class="form-control"  align="left"  maxlength="15"/>
		</div>

		<script type="text/javascript">	
									$(function(){
										$("input#data_nascimento").setMask();	 
									});
		</script>
		
		<div class="input-group input-group">					
			<input  type="text"  name="data_nascimento" id="data_nascimento" class="form-control"/>
		</div>

		<script type="text/javascript">	
									$(function(){
										$("input#cep").setMask();	 
									});
		</script>
							

		<input  type="text"  name="cep"  placeholder="Cep"  id="cep"  class="input_frm3" />
		
		<input  type="text"  name="endereco"  placeholder="Endere&ccedil;o"  id="endereco"    class="input_frm3"/>

		<script type="text/javascript">	
									$(function(){
										$("input#numero").setMask();	 
									});
		</script>
		<input  type="text"  name="numero"  placeholder="numero"  id="numero"  class="input_frm3"/>

		<input  type="text"  name="complemento"  placeholder="Complemento"  id="complemento"/>
		
		<input  type="text"  name="bairro"  placeholder="Bairro"  id="bairro"/>

		<input  type="text"  name="cidade"  placeholder="Cidade"  id="cidade"/>

		<select  name="cd_estado"  id="cd_estado"  class="input_frm3"  >
			<option value='0'>Estado</option>
			<option   value="1">AC</option>
			<option   value="2">AL</option>
			<option   value="3">AM</option>
			<option   value="4">AP</option>
			<option   value="5">BA</option>
			<option   value="6">CE</option>
			<option   value="7">DF</option>
			<option   value="8">ES</option>
			<option   value="9">GO</option>
			<option   value="10">MA</option>
			<option   value="11">MG</option>
			<option   value="12">MS</option>
			<option   value="13">MT</option>
			<option   value="14">PA</option>
			<option   value="15">PB</option>
			<option   value="16">PE</option>
			<option   value="17">PI</option>
			<option   value="18">PR</option>
			<option   value="19">RJ</option>
			<option   value="20">RN</option>
			<option   value="21">RO</option>
			<option   value="22">RR</option>
			<option   value="23">RS</option>
			<option   value="24">SC</option>
			<option   value="25">SE</option>
			<option   value="26">SP</option>
			<option   value="27">TO</option>
		</select>
		
	</form>






		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// [RODRIGO] Carrega sidebar
// posts e comentarios recentes, metas e categorias
//get_sidebar();
get_footer();
