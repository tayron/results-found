# Results Found
Classe que pesquisa em um texto a uma palavra qualquer, por exemplo usada em uma pesquisa e a deixa em negrito no texto.

Para utilizar basta instanciar a classe <code>$resultsFound = new ResultsFound();</code>.

Quando for listar os dados resultados de uma pesquisa, basta passar o conteúdo e a palavra usada na busca para o método markText desta forma:

<code>echo $resultsFound->markText($texto, $_GET['pesquisa']);</code>

Digamos que tenho uma tela de listagem de usuários e na minha action eu defini que irei poder realizar um filtro por nome de usuário, então na minha view ficará assim:

<code>echo $resultsFound->markText($user['name'], $_GET['pesquisa']);</code>

Digamos que pesquisamos todos os usuários com a palavra "Pedro", ai o resultado deverá ser algo assim:

<table>
<thead>
<tr>
<th>Nome</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
  <td><strong>Pedro</strong> cardoso</td>
  <td><strong>pedro</strong>321cardoso@teste.com.br</td>
</tr>
<tr>
  <td>Algusto <strong>Pedro</strong> da Silva</td>
  <td>algusto<strong>pedro</strong>silva@teste.com.br</td>
</tr>
</tbody>
</table>


## Utilização via composer

```sh
    "require": {
        ...
        "tayron/results-found" : "dev-master
        ... 
    },    
```
