    function validarPlaca(string) {
    var placa = string.value; // Passa para a variável 'placa' o que o usuário digitar no formulário
    
    
    if (placa.length === 1 || placa.length === 2) {                       // Quando a string possuir 1 ou 2 dígitos
            placaMaiuscula = placa.toUpperCase();                      // Passa a string para letras maiúsculas
            document.forms[0].placa.value = placaMaiuscula;    // Coloca a string modificada de volta no formulário
            return placaMaiuscula;
    }

    if (placa.length === 3){                                                        // Quando a string possuir 3 dígitos
            placa += "-";                                                                 // Adiciona um hífen
            placaMaiuscula = placa.toUpperCase();                   // Passa a string para letras maiúsculas
            document.forms[0].placa.value = placaMaiuscula; // Coloca a nova string de volta no formulário
            return placaMaiuscula;
    }
}
