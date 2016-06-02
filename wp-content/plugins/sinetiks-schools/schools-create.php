<?php
function sinetiks_schools_create () {
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
//insert
if(isset($_POST['insert'])){
	global $wpdb;
	$wpdb->insert(
		'school', //table
		array('id' => $id,'name' => $name,'email' => $email,'telefone' => $telefone), //data
		array('%s','%s') //data format			
	);
	$message.="Inserted";
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Add Novos Funcionarios, Clientes</h2>
<?php if (isset($message)): ?><div class="updated"><p><?php echo $message;?></p></div><?php endif;?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

<table class='wp-list-table widefat fixed'>
<tr><th>ID</th><td><input type="text" name="id" value="<?php echo $id;?>"/></td></tr>
<tr><th>Nome</th><td><input type="text" name="name" value="<?php echo $name;?>"/></td></tr>
<tr><th>E-mail</th><td><input type="text" name="email" value="<?php echo $email;?>"/></td></tr>
<tr><th>Telefone</th><td><input type="text" name="telefone" value="<?php echo $telefone;?>"/></td></tr>
</table>
<input type='submit' name="insert" value='Save' class='button'>
</form>
</div>
<?php
}
