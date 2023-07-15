# Ranking ATP - API
A API de Classificação de Jogadores é desenvolvida usando o framework Laravel e possui uma funcionalidade de web scraping para fornecer informações sobre jogadores por meio de um endpoint GET.

## Visão geral da API
A API permite que os usuários obtenham informações de classificação sobre jogadores específicos. Ela utiliza web scraping para coletar os dados atualizados de classificação de uma fonte externa e retorna um JSON com as informações do jogador solicitado.

# Configuração
Para configurar e executar a API de Classificação de Jogadores, siga as etapas abaixo:
<br>
1- Certifique-se de que você possui o PHP instalado em seu ambiente.
<br>
2- Clone ou faça o download do projeto da API a partir do repositório GitHub:
```
git clone https://github.com/seu-usuario/api-classificacao-jogadores.git
```
3- Acesse o diretório do projeto:
```
cd api-classificacao-jogadores
```
4- Instale as dependências do Composer:
```
composer install
```
5- Crie um arquivo .env na raiz do projeto e defina as configurações do banco de dados e outras configurações relevantes. Você pode usar o arquivo .env.example como base.
<br>
6- Gere uma nova chave de aplicativo:
```
php artisan key:generate
```
7- Inicie o servidor local:
```
php artisan serve
```
Após executar essas etapas, a API de Classificação de Jogadores estará em execução no endpoint http://localhost:8000.
<br>
## Endpoints da API

### Obter informações de classificação de um jogador
Retorna as informações de classificação de um jogador específico
* URL do endpoint: /ranking/{ranking-do-jogador}
* Método HTTP: GET 

Parâmetros da URL

Parâmetro   |Descrição
--------- | ------
ranking-do-jogador | O ranking ou identificador único do jogador cujas informações são solicitadas.
### Resposta:
A resposta será um objeto JSON contendo as informações do jogador solicitado, como nome, posição, pontuação, etc. Exemplo:
```
{
  "nome": "Jogador Exemplo",
  "posicao": "1",
  "pontuacao": 1500,
  "ranking_global": 25
}
```
## Considerações finais

A API de Classificação de Jogadores oferece uma maneira simples de obter informações de classificação de jogadores específicos usando web scraping. Ela pode ser facilmente integrada a aplicativos ou sistemas existentes para fornecer dados atualizados e relevantes sobre jogadores. Certifique-se de seguir as práticas recomendadas de segurança e de tratamento de erros ao utilizar a API em produção.

