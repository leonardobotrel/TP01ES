#
# Trabalho 1 – Laboratório de Engenharia de Software I

# Especificação de Requisitos do Software
### Especificação do Software
#### SISMOB
# 1.Introducao
### 1.1 Objetivos deste documento
O documento em questão tem por finalidade apresentar um sistema para cadastro e visualizacao imoveis para uma imobiliaria, tais como casas e apartamentos. O sistema busca facilitar a busca e o gerenciamento de imoveis para a imobiliaria.
### 1.2 Escopo do produto
#### 1.2.1	Nome do produto e de seus componentes principais
O software terá o nome de SISMOB

#### 1.2.2	Missao do Produto
A missão do produto é otimizar a insercao de imoveis disponiveis para aluguel e venda e facilitar o modo com que o cliente possa visualizar os imoveis disponiveis, a fim de reduzir o tempo para finalizacao do processo de compra ou venda do imovel.


#### 1.2.3.	Relação de Requisitos Funcionais

Número   | Descrição
--------- | ------
REQ-01 | Deve ser possivel cadastrar apenas casa e apartamentos como imoveis.
REQ-02 | Quando for cadastrar um novo imovel, o campo valor do aluguel nao deve estar vazio.
REQ-03 | Para cadastrar imoveis 
REQ-04 | Para os imóveis da categoria casa, as seguintes informações devem ser armazenadas: quantidade de quartos, quantidade de suítes, quantidade de salas de estar, número de vagas na garagem, área (em metros quadrados), se possui armário embutido e descrição (algum detalhe a mais que se deseja informar sobre a casa).
REQ-05 | para os imóveis da categoria apartamento, as seguintes informações devem ser armazenadas: quantidade de quartos, quantidade de suítes, quantidade de salas de estar, quantidade de salas de jantar, número de vagas na garagem, área (em metros quadrados), se possui armário embutido, descrição (algum detalhe a mais que se deseja informar sobre o apartamento), andar, valor do condomínio e indicativo se o condomínio possui portaria 24 horas.
REQ-06 | Para todos imoveis cadastrados,deve ser obrigatorio inserir o endereco do imovel,incluindo o bairro.
REQ-07  | O Cliente podera fazer busca por imoveis disponiveis fazendo uma busca por bairros.
REQ-08 | Se o cliente nao encontrar o bairro desejado na lista de bairros ja cadastrados, deve ser possivel digitar o bairro em um campo outros.
REQ-09 | A caixa de texto "outros" ,para busca de bairro que nao foram encontrados na lista ja cadastrada no sistema, somente devera ser mostrada em casa de selecao da opcao "outros" na lista de bairros disponiveis.
