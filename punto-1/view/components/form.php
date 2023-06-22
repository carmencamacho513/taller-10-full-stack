<?php include "./controller/calculationController.php"; ?>

<form method="post">
    <h2>Operaciones Básicas</h2>
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
            </label>
            <select
                id="operation-type"  
                name="operation_type" 
            >
                <option value="Opción">Escoja el Tipo de operación a Ejecutar:</option>
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicación">Multiplicación</option>
                <option value="División">División</option>
            </select>
        </di>
    </di>
        <button>Calcular</button>

</form>