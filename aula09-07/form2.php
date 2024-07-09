<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylef.css">
    <title>Tabela FBB</title>
    
</head>

<body>
    <table>
        <tr>
            <th>Nome do produto</th>
            <th>Código de barras</th>
            <th>Laboratório</th>
            <th>Preço de atacado</th>
            <th>Preço de venda</th>
            <th>Quantidade</th>
            <th>Data de fabricaçao</th>
            <th>Data de validade</th>
            <th>Fornecedor</th>
            <th>Exige receita</th>
        </tr>

        <tr>
    <td> <?php echo $_POST['nome']; ?> </td>
    <td> <?php echo $_POST['codigo']; ?> </td>
    <td> <?php echo $_POST['laboratorio']; ?></td>
    <td> <?php echo $_POST['precoat']; ?></td>
    <td> <?php echo $_POST['precov']; ?></td>
    <td> <?php echo $_POST['quant']; ?></td>
    <td> <?php echo $_POST['dataf']; ?></td>
    <td> <?php echo $_POST['datav']; ?></td>
    <td> <?php echo $_POST['forn']; ?></td>
    <td> <?php echo $_POST['rec']; ?></td>
  </tr>

    </table>
</body>

</html>