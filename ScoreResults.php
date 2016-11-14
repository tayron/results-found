<?php

/**
 * Classe que trata resultados de pesquisa
 *
 * @author Tayron Miranda <dev@tayron.com.br>
 */
class ScoreResults{

    /**
     * Constante com layout do elemento HTML strong
     *
     * @var string
     */
    const HTML_STRONG = '<strong title="%s">%s</strong>';

    /**
     * Constante com layout do elemento HTML strong com atributo class
     *
     * @var string
     */
    const HTML_STRONG_WITH_CLASS = '<strong title="%s" class="%s">%s</strong>';

    /**
     * Constante com os dizeres do title usado no elemento strong
     *
     * @var string
     */
    const TITLE = 'Esta palavra foi encontrada no resultado da pesquisa';

    /**
     * Método que destaca uma determinada palavra dentro de um texto informado
     *
     * @tutorial
     * $resultadoPesquisa = 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.';
     * $resultadoPesquisa = $this->markText($resultadoPesquisa, 'Pra lá , depois divol', 'fg-lightBlue');
     * Resultado: 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. <strong title="Esta palavra foi encontrada no resultado da pesquisa" class="fg-lightBlue">Pra lá , depois divol</strong>tis porris, paradis.';
     *
     * @param string $text Texto onde deve-se encontrar a palvra para destacar
     * @param string $searchedWord Palavra a ser destacada no texto
     * @param string $class Nome de um class (css) adicinal a ser aplicado na palavra destacada
     * 
     * @return string Retorna o texto com as palavras sublinhadas
     */
    public function markText($text = null, $searchedWord = null , $class = null) {
        $searchedWordOutOfSpace = trim($searchedWord);
        $foundWord = substr($text, strripos($text, $searchedWordOutOfSpace), strlen($searchedWordOutOfSpace));

        $wordHighlighted = ($class !== null)
          ? sprintf(self::HTML_STRONG_WITH_CLASS, self::TITLE, $class, $foundWord)
          : sprintf(self::HTML_STRONG, self::TITLE, $foundWord);

        return str_ireplace($searchedWordOutOfSpace, $wordHighlighted, $text);
    }

}
