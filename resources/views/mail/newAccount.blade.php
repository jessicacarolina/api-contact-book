<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-widt   h, initial-scale=1.0">
        <meta name="x-apple-disable-message-reformatting">
        <title>Conta criada com sucesso</title>
        <style media="screen">
          .btn-login {
                text-decoration: none;
                border: solid 1px #555;
                color:#555;
                border-radius: 10px;
                padding: 15px;
                background-color: #eee;
            }
            .btn-login:hover {
                background-color: #aaa;
            }
            .email-message {
                border-radius:10px;
                line-height: 20px;
                max-width:640px;
                margin-bottom: 50px;
                width:100%;
                border:solid 0px;
                font-family: Trebuchet, Arial, Helvetica, sans-serif;
                color:#555;
            }
            .padding20 {
                padding: 20px;
            }
            @font-face {
                font-family: 'Trebuchet';
            }
    </style>
    </head>
    <body bgcolor="#ECECEC">
        <table bgcolor="FFFFFF" align="center" class="email-message" cellspacing="0" cellpadding="0" role="presentation">
            <tr>
                <td align="center" style="padding: 10px; line-height: 23px;">
                    <h2>Parabéns!</h2>
                    <h2>Você criou uma nova conta</h2>
                </td>
            </tr>
            <tr>
                <td height="1px" bgcolor="#D9D9D9"></td>
            </tr>
            <tr>
                <td align="left" class="padding20">
                    <b style="margin-top:30px; ">Olá {{$name}}! </b>
                    <p style="margin-top:30px">Agora você consegue gerenciar sua agenda de contatos de um jeito rápido e prático.</p>
                    <p style="margin-top:30px">Dentro da plataforma será possível criar, atualizar, deletar e também listar todos os seus contatos.</p>
                    <p style="margin-top:30px">Comece gerenciando agora mesmo!</p>
                </td>
            </tr>
            <tr>
                <td height="60px" align="center">
                    <a href="#" align="center" class="btn-login"> Acessar minha agenda </a>
                </td>
            </tr>
            <tr>
                <td class="padding20">
            </td>
        </tr>
        </table>
    </body>
</html>
