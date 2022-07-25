<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>Login :: <?php echo $this->config->item('site_name');?></title>
<style>
body {
    background: url('<?php echo base_url('control/dist/img/login_back.jpg');?>') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;


    font-family: Montserrat;
}

.logo {
    height: 60px;
    width: 240px;
    background: url('<?php echo base_url('asset/img/logo.png');?>') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block .input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block .input#username , .login-block .input#identity {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block .input#username:focus , .login-block .input#identity:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block .input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block .input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block .input:active, .login-block .input:focus {
    border: 1px solid #ff656c;
}

.login-block button , .login-block #submit_btn {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
    margin-top: 15px;
}

.login-block button:hover , .login-block #submit_btn:hover {
    background: #ff7b81;
}
#infoMessage p{
    color: red;
}

</style>
</head>

<body>
<?php echo form_open("auth/login");?>
<div class="logo"></div>
<div class="login-block">

        <!-- 
            <h1>Login</h1>
            <input type="text" value="" placeholder="Username" id="username" />
            <input type="password" value="" placeholder="Password" id="password" />
            <button>Submit</button>
        -->



        <h1><?php echo lang('login_heading');?></h1>
        <p><?php echo lang('login_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

        

            <?php echo form_input($identity);?>

       
            <?php //echo lang('login_password_label', 'password');?>
            <?php echo form_input($password);?>
      

            
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            <?php echo lang('login_remember_label', 'remember');?>
         


          <?php echo form_submit('submit', lang('login_submit_btn'), array('id'=>'submit_btn','class' => 'input',));?>

        

        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
    
</div>
<?php echo form_close();?>
</body>

</html>