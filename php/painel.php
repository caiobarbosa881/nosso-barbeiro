<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="painel.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>
   

    <p>
<a class="logout-button" href="logout.php">Sair</a>
</p>
<div class="main-container">
    <h2 id="main-container-title">Seja Bem vindo ao Painel de Agendamento <?php echo $_SESSION['nome']; ?>, Faça seu agendamento nos horários disponíveis abaixo</h2>



    <div class="app-check">
   <div class="schedule-div">
   <h2>Segunda</h2>
    <input type="radio" class="option-input radio" name="example" /> 
    <div class="app-border">
      <label class="app-label">8:00 até 9:00
        </label>
      </div>
      <input type="radio" class="option-input radio" disabled name="example" />
      <div class="app-border">

        <label class="app-label">9:00 até 10:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">10:00 até 11:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">11:00 até 12:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">12:00 até 13:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">13:00 até 14:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">14:00 até 15:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">15:00 até 16:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">16:00 até 17:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">
        <label class="app-label">17:00 até 18:00
        </label>
      </div>
    </div>
</div>



    <div class="app-check">
    <div class="schedule-div">
      <h2>Terça</h2>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">8:00 até 9:00
        </label>
      </div>
      <input type="radio" class="option-input radio" disabled name="example" />
      <div class="app-border">

        <label class="app-label">9:00 até 10:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">10:00 até 11:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">11:00 até 12:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">12:00 até 13:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">13:00 até 14:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">14:00 até 15:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">15:00 até 16:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">16:00 até 17:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">
        <label class="app-label">17:00 até 18:00
        </label>
      </div>
    </div>
</div>
    
    <div class="app-check">
    <div class="schedule-div">
    <h2>Quarta</h2>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">8:00 até 9:00
        </label>
      </div>
      <input type="radio" class="option-input radio" disabled name="example" />
      <div class="app-border">

        <label class="app-label">9:00 até 10:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">10:00 até 11:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">11:00 até 12:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">12:00 até 13:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">13:00 até 14:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">14:00 até 15:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">15:00 até 16:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">16:00 até 17:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">
        <label class="app-label">17:00 até 18:00
        </label>
      </div>
    </div>
</div>

    <div class="app-check">
      <div class="schedule-div">
      <h2>Quinta</h2>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">8:00 até 9:00
        </label>
      </div>
      <input type="radio" class="option-input radio" disabled name="example" />
      <div class="app-border">

        <label class="app-label">9:00 até 10:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">10:00 até 11:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">11:00 até 12:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">12:00 até 13:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">13:00 até 14:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">14:00 até 15:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">15:00 até 16:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">16:00 até 17:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">
        <label class="app-label">17:00 até 18:00
        </label>
      </div>
    </div>
</div>

    <div class="app-check">
    <div class="schedule-div">
    <h2>Sexta</h2>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">8:00 até 9:00
        </label>
      </div>
      <input type="radio" class="option-input radio" disabled name="example" />
      <div class="app-border">

        <label class="app-label">9:00 até 10:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">10:00 até 11:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">11:00 até 12:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">12:00 até 13:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">13:00 até 14:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">14:00 até 15:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">15:00 até 16:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">16:00 até 17:00
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">
        <label class="app-label">17:00 até 18:00
        </label>
      </div>
    </div>
</div>
<button>Agendar</button>