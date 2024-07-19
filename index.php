<?php

// a)	Crie um programa que exiba todos os números pares entre 0 e 100.


  echo "Os números pares entre 0 e 100:" . PHP_EOL;
  echo PHP_EOL;
  for ($i = 0; $i <= 100; $i += 2) {
      echo $i . " " . PHP_EOL;;
  }


// b)	Desenvolva um programa que solicite ao usuário para inserir um número inteiro positivo e, em seguida, exiba todos os números pares entre 0 e o número inserido.


  $num = readline("Insira um número inteiro positivo: ");

  echo "Números pares entre 0 e $num: " . PHP_EOL;
  echo PHP_EOL;
  for ($i = 0; $i <= $num; $i += 2) {
  echo $i . " ";
  }


// c)	Crie um programa que solicite ao usuário para inserir uma palavra e, em seguida, exiba cada letra da palavra em uma linha separada.


  $palavra = readline("Escreva uma palavra: ");
  echo PHP_EOL;
  for ($i = 0; $i < strlen($palavra); $i++) {
      echo $palavra[$i] . "\n";
  }


// d)	Desenvolva um programa que solicite ao usuário para inserir um número inteiro positivo e, em seguida, exiba a soma de todos os números entre 1 e o número inserido.


  $num = readline("Insira um número inteiro positivo: ");
  echo PHP_EOL;

  $soma = 0;
  for ($i = 1; $i <= $num; $i++) {
      $soma += $i;
  }
  echo "A soma dos números de 1 a $num é: $soma\n";


// e)	Crie um programa que solicite ao usuário para inserir um número inteiro e, em seguida, exiba se esse número é primo ou não.

  $num = readline("Insira um número inteiro: ");
  echo PHP_EOL;
  $primo = true;
  
  if ($num <= 1) {
      $primo = false;
  } else {
      for ($i = 2; $i <= sqrt($num); $i++) {
          if ($num % $i == 0) {
              $primo = false;
              break;
          }
      }
  }
  
  if ($primo) {
      echo "$num é um número primo.";
     echo PHP_EOL;
  } else {
      echo "$num não é um número primo.";
     echo PHP_EOL;
  }


// f)	Desenvolva um programa que solicite ao usuário para inserir uma sequência de números inteiros e, em seguida, exiba o maior número inserido.

  $sequencia = readline("Escreva uma sequência de números inteiros separados por espaço: ");
  $numeros = explode(" ", $sequencia);
  echo PHP_EOL;
  $max = PHP_INT_MIN;
  
  foreach ($numeros as $numero) {
      $numero = intval($numero);
      if ($numero > $max) {
          $max = $numero;
      }
  }
   echo PHP_EOL;
  echo "O maior número inserido é: $max";


// g)	Crie um programa que exiba a tabuada do número 5 até o número 10.


  for ($i = 5; $i <= 10; $i++) {
      echo "Tabuada do $i:";
      for ($j = 1; $j <= 10; $j++) {
          echo "$i x $j = " . ($i * $j) . PHP_EOL;
      }
       echo PHP_EOL;
  }



// h)	Desenvolva um programa que solicite ao usuário para inserir um número inteiro positivo e, em seguida, exiba todos os divisores desse número.
  
  $num = readline("Insira um número inteiro positivo: ");
  echo "Divisores de $num:" . PHP_EOL;
  
  for ($i = 1; $i <= $num; $i++) {
      if ($num % $i == 0) {
          echo "$i\n";
      }
  }



// i)	Crie um programa que exiba todos os números primos entre 1 e 100.

  echo "Números primos entre 1 e 100:\n";
  
  for ($num = 2; $num <= 100; $num++) {
      $primo = true;
      for ($i = 2; $i <= sqrt($num); $i++) {
          if ($num % $i == 0) {
              $primo = false;
              break;
          }
      }
      if ($primo) {
          echo "$num ";
      }
  }



// j)	Desenvolva um programa que exiba a soma dos números pares entre 1 e 100.

  $soma = 0;
  for ($i = 2; $i <= 100; $i += 2) {
      $soma += $i;
  }
  echo "A soma dos números pares entre 1 e 100 é: $soma\n";
?>

