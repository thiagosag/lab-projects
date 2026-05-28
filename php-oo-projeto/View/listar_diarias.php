<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Favores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Lista de Favores</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Ajudou</th>
            <th scope="col">Ajudado</th>        
            <th scope="col">Tempo</th>
            <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($diarias as $diaria) :?>
                <tr>
                    <td scope="row"> <?php echo $diaria->diarista->nome;?> </td>
                    <td> <?php echo $diaria->cliente->nome;?> </td>
                    <td> <?php echo $diaria->tempo;?> </td>
                    <td> <?php echo $diaria->data;?> </td>
                </tr>
            <?php endforeach; ?>
            <p><strong>Nota: </strong>projeto extremamente simples para práticar lógica MVC e Orientação a Objetos.</p>
        </tbody>
        </table>
        <div>
        <img style="border-radius: 15px; border: solid, black, 2px; width: 500px;" src="https://flipscreened.com/wp-content/uploads/2019/09/scooby-doo-2020.jpg?w=1024" alt="">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>