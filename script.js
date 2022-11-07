/**
 * JavaScript do aplicativo
 * Depende de "jQuery" (https://jquery.com/)
 *
 * OBS1: Este é o aplicativo principal, para que o tema (template) do site
 * opere. Posteriormente, quando necessário, cada página (conteúdo) terá seu
 * próprio JavaScript, assim, somente o JavaScript necessário será carregado.
 * 
 * OBS1: Todas as funções que iniciam com um cifrão ($) fazem parte da 
 * biblioteca jQuery, ou seja, não são do JavaScript "puro" (vanilla).
 *
 * Para saber mais:
 *   • https://www.w3schools.com/js/
 *   • https://www.w3schools.com/jsref/
 *   • https://www.w3schools.com/jquery/
 **/

/**
 * runApp() → Aplicativo principal
 * Este aplicativo é executado pela última linha deste código.
 **/
function runApp() {

    // Somente para testes. Apague!
    console.log('Tech.Novatas');
}

// jQuery → Executa aplicativo "runApp" quando o documento estiver pronto:
$(document).ready(runApp);
