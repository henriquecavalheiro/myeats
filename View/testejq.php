<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../static/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            console.log("Documento caregado");

            $("#btn_enviar").click(function(){
                valida_dados();
            })
        })

        function valida_dados(){
            var conteudo = $("#nome").val()
            $("#btn_enviar").val(conteudo);
        }

        $.ajax({
            type: "POST",
            url: url,
            dataType: dataType
         });


    </script>
</head>
<body>
    <h1>Usando jquery</h1>
    Nome: <input type="text" id="nome" name="nome">
    <br>
    <input type="button" id="btn_enviar" value="Enviar Dados" onclick="valida_dados()">
    
</body>
</html>