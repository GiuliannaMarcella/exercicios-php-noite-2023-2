<!-- 1 - Faça um programa, com uma função que necessite de três argumentos,
e que forneça a soma desses três argumentos através de uma função.
Seu script também deve fornecer a média dos três números, através de uma segunda
função que chama a primeira. Obs. faça uma validação para não deixar o usuário
enviar inputs vazios. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="number" name="numero1" id="primeiro">
    <input type="number" name="numero2" id="segundo">
    <input type="number" name="numero3" id="terceiro">
    <button onclick="enviar()">Somar</button>

</body>

<script>
    function enviar() {
        let numero1 = document.querySelector('#primeiro').value;
        let numero2 = document.querySelector('#segundo').value;
        let numero3 = document.querySelector('#terceiro').value;

        let validar = validarNumeros(numero1, numero2, numero3);

        if (validar == true) {
            window.open(`Soma_Media2.php?numero1=${numero1}&numero2=${numero2}&numero3=${numero3}`);
        }
    }

    function validarNumeros(valor1, valor2, valor3) {
        if (valor1 == '') {
            alert('preencha o campo indicado');
            document.querySelector('#primeiro').focus();
            return false;
        }
        else if (valor2 == '') {
            alert('preencha o campo indicado');
            document.querySelector('#segundo').focus();
            return false;
        }
        else if (valor3 == '') {
            alert('preencha o campo indicado');
            document.querySelector('#terceiro').focus();
            return false;
        }
        else {
            return true;
        }
    }

</script>

</html>