<head>
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
   <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<div class="side">

        <a href="<?php echo e(url('/')); ?>" style="background:linear-gradient(110deg, #ffae00,#ffc547)orange">Home</a>
       <a href="<?php echo e(url('/login')); ?>" style="background:linear-gradient(110deg,#fcc05e,#fff387);">Login</a>
    
</div>

<form method="POST" action="<?php echo e(route('register')); ?>" class="box">
    <h1>Registrar</h1>
    <?php echo e(csrf_field()); ?>




    <input placeholder="Nome" id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required="" autofocus="">


    <?php if($errors->has('name')): ?>

    <span class="invalid-feedback" role="alert">

        <strong><?php echo e($errors->first('name')); ?></strong>

    </span>

    <?php endif; ?>

    <input placeholder="Email" id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required="">


    <?php if($errors->has('email')): ?>

    <span class="invalid-feedback" role="alert">

        <strong><?php echo e($errors->first('email')); ?></strong>

    </span>

    <?php endif; ?>


    <input placeholder="Senha" id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required="">


    <?php if($errors->has('password')): ?>

    <span class="invalid-feedback" role="alert">

        <strong><?php echo e($errors->first('password')); ?></strong>

    </span>

    <?php endif; ?>



    <input placeholder="Confirme a senha" id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">



    <input type="submit" class="logbtn" value="Rgistrar">



    


    <p>

        Ao se registrar, você aceita nossas Condições, a Política de Dados e a Política de Cookies.

    </p>






    <p>

        Você tem uma conta? <a href="<?php echo e(route('login')); ?>">entrar</a>
    </p>