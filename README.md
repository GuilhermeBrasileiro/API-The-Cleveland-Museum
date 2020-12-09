# API-The-Cleveland-Museum
Estudo no consumo de dados de uma API.

Neste projeto utilizei bootstrap para fazer o Front-end e PHP para requisições e manuseio das informações da API.

Tela inicial do sistema.
![Tela Inicial](/readme-data/telaInicial.png)
A rota para essa tela é a "/home", podendo receber parametros de pesquisa search, type, limit e departament.<br>
Exemplo de rota para pesquisar 5 obras do tipo pintura e relacionadas a água: "/home?q=water&type=Painting&limit=5" 

Opções para filtrar obras.
![Filtro de obras](/readme-data/filtro.png)

Tela das obras.
![Tela Obra](/readme-data/telaArte.png)
Esta tela recebe uma rota dinâmica baseada no id único de cada obra.<br>
Exemplo de rota para a obra acima: "/home/art?id=1937.577"

![Citações](/readme-data/citations.gif)

![Exibições](/readme-data/exhibitions.gif)

Todos os direitos dos dados utilizados são reservados ao The Cleveland Museum of Art Open Access | https://openaccess-api.clevelandart.org/ | https://github.com/ClevelandMuseumArt/openaccess
