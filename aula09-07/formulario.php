<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia's BB</title>
    <link rel="stylesheet" href="stylef.css">
    <link rel="shortcut icon" href="images (1).jpeg" type="image/x-icon">
</head>

<body>
    <h2>Farmácia's BORA BILL</h2>

    <form action="form2.php" method="POST">
        <p> Nome do Pordutudo: <input type="text" name="nome"/></p>
        <p> Codigo de Barra: <input type="number" name="codigo"/></p>
        
        <label for="Laboratório">laboratorio</label>
        <select id="Laboratório" name="laboratorio">
         <option value="select">Selecione</option>
         <option value="neoquimica">Neo Química</option>
         <option value="cimed">Cimed</option>
         <option value="ems">EMS</option>
         <option value="eurofarma">Eurofarma</option> 
         <option value="abemv">Ambev</option> 
         <option value="medquimica">MedQuímica</option>
         </select>

        <p> Preço de Atacado: <input type="number" name="precoat/"></p>
        <p> Preço de Venda: <input type="number" name="precov/"></p>
        <p> Quantidade: <input type="number" name="quant/"></p>
        <p> Fabricação: <input type="date" name="dataf/"></p>
        <p> Validade: <input type="date" name="datav/"></p>
        <p> Fornecedor: <input type="text" name="forn/"></p>
        <p> Exige receita? <input type="radio" id=sim name="sim" value="sim">
        <label for="sim">SIM</label>
        <input type="radio" id="nao" name="nao" value="nao">
        <label for="não">NÃO</label> </p>
        <input type="submit" value="CADASTRAR PRODUTOS">
    
    </p>
        

    </form>
</body>

</html>