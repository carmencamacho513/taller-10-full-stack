<?php include "./controller/calculationController.php"; ?>

<form method="post">
    <h2>Calculadora de Operaciones</h2>
    <div class="for_row">
        <div>
            <label for="first-number">
                Ingrese el Primer Número
            </label>
            <input 
               id="first-number" 
               type="text" 
               name="first_number" 
               placeholder="4">
        </di>

        <div>
            <label for="second-number">
                Ingrese el Segundo Número
            </label>
            <input 
               id="second-number" 
               type="text" 
               name="second_number" 
               placeholder="8">
        </di>

        <div>
            <label for="operation-type">
                    Tipo de Operación
            </label>
            <select
                id="operation-type"  
                name="operation_type" 
            >
                <option value="A">Suma</option>
                <option value="B">Resta</option>
                <option value="C">Multiplicación</option>
                <option value="D">División</option>
            </select>
        </di>
    </di>
        <button>Calcular la Operación</button>

</form>