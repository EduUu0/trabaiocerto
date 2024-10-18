<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .centered-form {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-purple sidebar">
                <div class="logo">
                    <i class="bi bi-0-circle-fill"></i>
                    <h2>HORIZON+</h2>
                </div>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-target="produtos">
                                <i class="bi bi-phone-fill icon-large"></i>
                                <span>Produtos</span>
                                <i id="indicator" class="bi bi-caret-left-fill indicator"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="pedidos">
                                <i class="bi bi-basket2-fill icon-large"></i>
                                <span>Pedidos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="fornecedores">
                                <i class="bi bi-people-fill icon-large"></i>
                                <span>Fornecedores</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="funcionarios">
                                <i class="bi bi-person-badge-fill icon-large"></i>
                                <span>Funcionários</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="estoque">
                                <i class="bi bi-box-fill icon-large"></i>
                                <span>Estoque</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="equipamentos">
                                <i class="bi bi-pc-display-horizontal icon-large"></i>
                                <span>Equipamentos</span>
                            </a>
                        </li>
                    </ul>
                    <div class="user">
                        <div class="nav-item">
                            <div class="d-flex align-items-center card-user">
                                <i class="bi bi-person-circle users"></i>
                                <div class="ml-2">
                                    <div>Funcionário</div>
                                    <div class="text-muted" style="font-size: 0.8em;">Função xyz</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h2">Cadastro de Produtos</h1>
                </div>
                
                <div id="produtos" class="content centered-form">
                    <div id="confirmationMessage" class="alert alert-success" role="alert" style="display: none;">
                        Produto cadastrado com sucesso!
                    </div>
                    <form id="productForm" action="insert_product.php" method="POST">
                        <div class="form-group">
                            <label for="productName">Nome do Produto</label>
                            <input type="text" class="form-control" id="productName" name="productName" placeholder="Nome completo do produto" maxlength="100" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Descrição do Produto</label>
                            <textarea class="form-control" id="productDescription" name="productDescription" rows="3" placeholder="Descrição detalhada do produto"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="productCategory">Categoria do Produto</label>
                                <select class="form-control" id="productCategory" name="productCategory">
                                    <option value="1">Eletrônicos</option>
                                    <option value="2">Roupas</option>
                                    <option value="3">Alimentos</option>
                                    <option value="4">Utensílios Domésticos</option>
                                    <option value="5">Outros</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="unitMeasure">Unidade de Medida</label>
                                <input type="text" class="form-control" id="unitMeasure" name="unitMeasure" placeholder="Unidade (ex: kg, litro, unidade)" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="productSupplier">Fornecedor do Produto</label>
                                <select class="form-control" id="productSupplier" name="productSupplier">
                                    <option value="1">Fornecedor A</option>
                                    <option value="2">Fornecedor B</option>
                                    <option value="3">Fornecedor C</option>
                                    <option value="4">Fornecedor D</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="costPrice">Preço de Custo</label>
                                <input type="text" class="form-control" id="costPrice" name="costPrice" placeholder="Preço de custo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="stockQuantity">Quantidade em Estoque</label>
                                <input type="number" class="form-control" id="stockQuantity" name="stockQuantity" placeholder="Quantidade em estoque" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="salePrice">Preço de Venda</label>
                                <input type="text" class="form-control" id="salePrice" name="salePrice" placeholder="Preço de venda" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
                    </form>
                </div>

                <!-- Outras Divs de Conteúdo -->
                <div id="pedidos" class="content" style="display: none;">
                    <h2>Gestão de Pedidos</h2>
                </div>
                <div id="fornecedores" class="content" style="display: none;">
                    <h2>Gestão de Fornecedores</h2>
                </div>
                <div id="funcionarios" class="content" style="display: none;">
                    <h2>Gestão de Funcionários</h2>
                </div>
                <div id="estoque" class="content" style="display: none;">
                    <h2>Gestão de Estoque</h2>
                </div>
                <div id="equipamentos" class="content" style="display: none;">
                    <h2>Gestão de Equipamentos</h2>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#salePrice').mask('000.000.000.000.000,00', {reverse: true});
            $('#costPrice').mask('000.000.000.000.000,00', {reverse: true});

            $('#productForm').on('submit', function(event) {
                event.preventDefault(); // Impede o envio normal do formulário

                $.ajax({
                    type: 'POST',
                    url: 'insert_product.php',
                    data: $(this).serialize(), // Serializa os dados do formulário
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#confirmationMessage').fadeIn().delay(2000).fadeOut();
                            $('#productForm')[0].reset(); // Reseta o formulário
                        } else {
                            alert("Erro ao cadastrar produto.");
                        }
                    }
                });
            });

            $('.nav-link').on('click', function() {
                var target = $(this).data('target');
                $('.content').hide(); // Esconde todas as divs de conteúdo
                $('#' + target).show(); // Mostra a div de conteúdo correspondente
            });
        });
    </script>
</body>

</html>
