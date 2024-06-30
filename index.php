<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Currículo Fast</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script defer src="script.js"></script>
</head>
<body>
    <header class="header">
        <img src="/img/curriculo_gold.png" alt="Logo" class="header-logo">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Gerador de Currículo Gratuito</li>
            </ol>
        </nav>
    </header>

    <div class="section">
        <h2>Informações Pessoais</h2>
        <form action="generate_resume.php" method="POST">
            <div class="input-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="input-group">
                <label for="age">Idade</label>
                <input type="text" id="age" name="age">
            </div>
            <div class="input-group">
                <label for="sex">Sexo</label>
                <input type="text" id="sex" name="sex">
            </div>
            <div class="input-group">
                <label for="phone">Telefone</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="input-group">
                <label for="address">Endereço</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="add-button">Enviar</button>
        </form>
    </div>

    <div class="section">
        <h2>Formação</h2>
        <div id="education-section">
            <div class="input-group">
                <label for="education-1">Instituição e Curso</label>
                <input type="text" id="education-1" name="education[]">
            </div>
        </div>
        <button class="add-button" onclick="addEducation()">Adicionar Formação</button>
    </div>

    <div class="section">
        <h2>Experiências Profissionais</h2>
        <div id="experience-section">
            <div class="input-group">
                <label for="experience-1">Empresa e Cargo</label>
                <input type="text" id="experience-1" name="experience[]">
                <label for="experience-desc-1">Descrição das Atividades</label>
                <textarea id="experience-desc-1" name="experience-desc[]"></textarea>
            </div>
        </div>
        <button class="add-button" onclick="addExperience()">Adicionar Experiência</button>
    </div>
    <div class="button-container">
        <button onclick="generatePDF()" class="add-button">Gerar PDF</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
