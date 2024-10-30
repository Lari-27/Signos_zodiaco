# signos_zodiaco
Este repositório contém a implementação de uma aplicação web desenvolvida no âmbito da disciplina de Programação Web. O objetivo é criar uma página interativa que permita aos usuários descobrir seu signo zodiacal com base na data de nascimento informada.
O formulário, estruturado com HTML e estilizado com Bootstrap, é projetado para enviar os dados para uma segunda página, onde o signo será exibido. Para isso, foi necessário criar uma estrutura de pastas adequada dentro do ambiente de desenvolvimento, utilizando o Visual Studio Code e o XAMPP para hospedar a aplicação localmente.
Após a configuração inicial, foi criado um arquivo XML contendo as informações dos signos zodiacais, incluindo datas de início e fim, nome e descrição de cada signo. Com o arquivo XML pronto, a lógica em PHP foi implementada na página de resultado, onde a data de nascimento do usuário é recebida via método POST.
O script PHP, utilizando a função simplexml_load_file, carrega as informações do arquivo XML e verifica em qual intervalo de datas a data fornecida se encaixa, apresentando assim o signo correspondente ao usuário.

