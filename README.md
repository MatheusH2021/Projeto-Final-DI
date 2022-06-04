# Projeto Final DI (Design de Interfaces)
Projeto realizado para avaliação final de DI(Design de Interfaces).

## Get it Done!
O projeto tem como intuito principal ser um gerenciador de tarefas, onde pode adicionar, editar, excluir e marcar tarefas como concluidas. O projeto foi desenvolvida com base em PHP, HTML, CSS e BootStrap. Utilizando o banco de dados MySql. O projeto também segue alguns princípios de MVC, onde se divide a aplicação em Model Views e Controllers. 

## Layout e padrões:
O projeto possui um estilo de Dashboard, apresentando gráficos na página inicial e funções principais em outras paginas.
O padrão de cores tem como principal o azul, onde vai variando de tonalidade dependendo dos componente. A cor secundáriae é o Branco, onde é utilizado principalmente no background da plataforma e no fundo das tabelas e gráficos. A fonte escolhida foi Roboto, onde está presente em todo o projeto.
### Pagina de Login:
   ![Sem título](https://user-images.githubusercontent.com/89544590/172020956-7b5c7c0f-e680-4ccd-9ce1-49f3f6e34b31.jpg)   
### Pagina de Cadastro:
   ![Cadastro](https://user-images.githubusercontent.com/89544590/172020971-38a9e8a4-4439-4d9e-a5a9-2f9406bc59f1.jpg)
### Home
   ![Barra aparecendo](https://user-images.githubusercontent.com/89544590/172020172-80beb5dd-9c61-4b7c-ad28-6c240850a23e.jpg)
### Minhas Tarefas:
   ![Minhas tarefas](https://user-images.githubusercontent.com/89544590/172020193-f01c0c7b-d711-40b3-b92a-f56aa440fc1d.jpg)
### Detalhes da Tarefa:
   ![Detalhes tarefa](https://user-images.githubusercontent.com/89544590/172020225-4fa1aa5a-30c0-4036-a876-a715c87808c5.jpg)
### Adicionar Tarefa e Editar Tarefa:
   ![Adicinar tatefa](https://user-images.githubusercontent.com/89544590/172020237-54c892ac-c090-4ca7-bdf7-41d0110bc6e7.jpg) ![Atualizar tarefa](https://user-images.githubusercontent.com/89544590/172020240-ce9fd203-c0d5-438d-84f0-7b066f12fb4a.jpg)

## Base de dados e Tabelas:
O projeto possui duas tabelas de usuarios e tarefas, que são interligadas por meio de chave estrangeira. Segue abaixo a codificação para melhor execução! O nome escolhido para a base de dados foi: getitdone, tudo minúsculo e sem espaço.

### . Criando tabela de Usuarios:                                                                                                  
    CREATE TABLE usuarios (                                                   
      id INT NOT NULL AUTO_INCREMENT , 
      nome VARCHAR(35) NOT NULL , 
      senha VARCHAR(12) NOT NULL , 
      data_criada DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)
    );
### . Criando tabela de Tarefas:
    CREATE TABLE tarefas (
      id int NOT NULL PRIMARY KEY,
      titulo VARCHAR(255) NOT NULL , 
      descricao VARCHAR(255) NOT NULL , 
      status VARCHAR(25) NOT NULL , 
      data_prazo DATE NULL , 
      data_cadastro DATE NOT NULL DEFAULT CURRENT_TIMESTAMP, 
      usuario_id int not null
    );
    
 ### . Adicionando a chave estrangeira em Tarefas:
    ALTER TABLE tarefas
    ADD FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE;
    
## . Como executar o projeto:
Para execução do projeto voçê irá precisar de um servidor local, no desenvolvimento foi utilizado o XAMPP, com o Apache e o MySql, Lembrando que para execução correta, deve ser primeiro criado as tabelas no item acima.
