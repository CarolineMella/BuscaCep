<?php 
include('config.php');
$find = $conn->prepare("SELECT * FROM dados_cep WHERE cep=:cepNumber ");
$find->bindParam(':cepNumber', $cepNumber);
$find->execute();
$result = $find->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Busca Cep</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-form validate-form" style="width:900px !important;" id="table-res">
				<span class="contact1-form-title" id="table-res">
					Endereço encontrado com sucesso!
				</span>
				<div class="wrap-input1 validate-input" id="table-res">
                    <table style="width:900px !important;" class="table table-bordered table-hover" id="table-res-res">
                        <thead>
                            <tr class="table-primary">
                                <th>Rua</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>Cep</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="80px">
                                <?php 
                                    foreach ($result as $array){
                                        print_r($array['rua']);
                                    }
                                ?>
                                </td>
                                <td width="80px">
                                <?php 
                                    foreach ($result as $array){
                                        print_r($array['bairro']);
                                    }
                                ?>
                                </td>
                                <td width="80px">
                                <?php 
                                    foreach ($result as $array){
                                        print_r($array['cidade']);
                                    }
                                ?>
                                </td>
                                <td width="80px">
                                <?php 
                                    foreach ($result as $array){
                                        print_r($array['estado']);
                                    }
                                ?>
                                </td>
                                <td width="80px">
                                <?php 
                                    foreach ($result as $array){
                                        print_r($array['cep']);
                                    }
                                ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
				</div>
				<div class="container-contact1-form-btn" style="margin-top:50px;" id="table-res">
					<a class="contact1-form-btn" href="index.php">
						<span>
                            Voltar
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                    </a>
				</div>
            </div>
		</div>
	</div>
</body>
</html>