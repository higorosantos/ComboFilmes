-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Mar-2019 às 21:27
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `combofilme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  `foto_perfil` varchar(200) NOT NULL,
  `data_comentario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `nome_usuario`, `id_filme`, `comentario`, `foto_perfil`, `data_comentario`) VALUES
(26, 'Higor Oliveira', 22, 'TESTE', 'giphy.gif', '2019-03-14 17:22:22'),
(27, 'Higor Oliveira', 22, 'OUTRO TESTE', 'giphy.gif', '2019-03-14 17:22:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id_filme` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `duracao` int(11) NOT NULL,
  `temporada` int(11) NOT NULL,
  `pais_origem` varchar(10) NOT NULL,
  `censura` int(11) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  `url_video` varchar(100) NOT NULL,
  `sinopse` varchar(1000) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id_filme`, `tipo`, `titulo`, `genero`, `duracao`, `temporada`, `pais_origem`, `censura`, `url_img`, `url_video`, `sinopse`, `data_cadastro`) VALUES
(2, 'filme', 'Animais Fantásticos: Os Crimes', 'aventura', 134, 0, 'EUA', 10, 'CinePOP-Animais-Fantásticos.jpg', 'J4YRv-BqakU', 'Newt Scamander reencontra os queridos amigos Tina Goldstein, Queenie Goldstein e Jacob Kowalski. Ele é recrutado pelo seu antigo professor em Hogwarts, Alvo Dumbledore, para enfrentar o terrível bruxo das trevas Gellert Grindelwald, que escapou da custódia da Macusa (Congresso Mágico dos EUA) e reúne seguidores, dividindo o mundo entre seres de magos sangue puro e seres não-mágicos.', '0000-00-00 00:00:00'),
(3, 'filme', 'Aquaman', 'aventura', 143, 0, 'EUA', 14, 'CinePOP-Aquaman.jpg', '90bG43JcwRE', 'Metade humano e semi atlante, Arthur Curry (Jason Momoa) parte em uma jornada junto de seus aliados Mera (Amber Heard) e Vulko (Willem Dafoe) para encontrar o tridente do rei, uma arma mítica capaz de controlar os sete mares. O trio precisa cumprir seu objetivo antes de Orm (Patrick Wilson), meio-irmão de Arthur que pretende derrubá-lo e tomar o trono de Atlântida.', '0000-00-00 00:00:00'),
(6, 'serie', 'Vikings', 'acao', 18, 3, 'EUA', 16, 'serie1.jpg', 'Nvvb3ur0mo8', 'A série é inspirada nas histórias de invasões, comércio e exploração dos Nórdicos da Escandinávia medieval. A série segue as explorações do lendário líder Viking Ragnar Lothbrok e sua tripulação e família, como notavelmente foi estabelecido nas sagas Ragnars saga Loðbrókar e Ragnarssona þáttr do século XIII, assim como na obra do Saxão Gramático do século XII, Gesta Danorum. As sagas lendárias nórdicas eram parcialmente contos de ficção baseados na tradição oral nórdica, escritas cerca de 200 à 400 anos após os eventos que descrevem. Mais inspirações são tiradas de fontes históricas da época, como os registros do ataque Viking em Lindisfarne, retratado no segundo episódio, ou a conta de Amade ibne Fadalane sobre os Vikings Volga, do século X. A série se passa no início da era viking, marcada pelo ataque de Lindisfarne, em 793.', '0000-00-00 00:00:00'),
(7, 'serie', 'The Flash', 'aventura', 14, 2, 'EUA', 0, 'serie2.jpg', '-JhWYQPsTlc', 'Após testemunhar o estranho assassinato de sua mãe e a injusta acusação de seu pai pelo crime, Barry Allen fica sob os cuidados do detetive Joe West e sua filha Iris West. Barry se torna brilhante, mas socialmente, um cientista forense desconhecido trabalhando para o Departamento de Polícia de Central City. Sua obsessão por seu trágico passado faz com que ele fique separado das demais pessoas ao seu redor; ele investiga casos frios, ocorrências paranormais, e vazamentos de ponta de avanços científicos que podem dar uma luz no caso do assassinato de sua mãe. Ninguém acredita em sua descrição do crime — que uma bola de raio com o rosto de um homem invadiu sua casa naquela noite e matou sua mãe — e Barry é forçado a procurar por si mesmo pistas que limpem o nome de seu pai. Quatorze anos depois da morte de sua mãe, uma explosão de um avançado Acelerador de Partículas, durante sua apresentação ao público, banha a cidade com uma forma de radiação previamente desconhecida durante uma tempest', '0000-00-00 00:00:00'),
(11, 'serie', 'Sex Education', 'comedia', 0, 1, 'EUA', 16, 'serie5.jpg', 'shpb-5tim8k', 'dsdsdds', '0000-00-00 00:00:00'),
(12, 'filme', 'Kingsman', 'aventura', 134, 0, 'EUA', 0, 'Kingsman-3.jpg', 'yzMtm3XqsLc', 'tydydfyfytfytfytfyt', '0000-00-00 00:00:00'),
(14, 'serie', 'Game of Thrones', 'aventura', 0, 1, 'EUA', 16, 'serie3.jpg', '1ikKwg3FHQg', '....', '0000-00-00 00:00:00'),
(18, 'serie', 'Todo Mundo  Odeia o Chris', 'comedia', 0, 1, 'EUA', 14, 'todo-mundo-odeia-o-cris.jpg', '_6L2IoopqcY', 'Esta comédia narra as desventuras do adolescente Chris nos anos 80 no bairro do Brooklyn. Chris está rodeado por familiares excêntricos, incluindo seu pai Julius, sua mãe Rochelle, sua irmã mimada Tonya e seu irmão Drew que é bastante popular.', '2019-03-10 15:01:29'),
(22, 'filme', 'Aladdin', 'aventura', 90, 1, 'EUA', 0, '1157358.jpg', '9XokeQzyKGw', 'Um jovem humilde descobre uma lâmpada mágica, com um gênio que pode lhe conceder desejos. Agora o rapaz quer conquistar a moça por quem se apaixonou, mas o que ele não sabe é que a jovem é uma princesa que está prestes a se noivar. Agora, com a ajuda do Gênio (Will Smith), ele tenta se passar por um príncipe e para conquistar o amor da moça e a confiança de seu pai. ', '2019-03-14 15:20:12'),
(23, 'serie', 'Greys Anatomy', 'drama', 0, 2, 'EUA', 14, 'download.jpg', 'TdQAKVqg7pQ', 'Um grupo de jovens médicos do Hospital Seattle Grace e suas carreiras como residentes. Um dos médicos, que se esforça para se relacionar com seus colegas, é a filha de um famoso cirurgião.', '2019-03-14 15:50:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `privilegio` varchar(12) NOT NULL,
  `data_cadastro` date NOT NULL,
  `foto_perfil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `pwd`, `privilegio`, `data_cadastro`, `foto_perfil`) VALUES
(1, 'Higor Oliveira', 'higor@hotmail.com', '34093800', '2', '0000-00-00', 'giphy.gif'),
(2, 'Ruan', 'ruan@hotmail.com', '123456', '2', '0000-00-00', ''),
(3, 'Lucas', 'lucas@hotmail.com', '123456', '2', '2019-02-05', ''),
(4, 'Rafael', 'rafael@gmail.com', '123456', '2', '2019-02-05', ''),
(5, 'raphael', 'raphaelradiche@hotmail.com', '235912', '2', '2019-03-06', ''),
(6, 'Joao', 'joao@gmail.com', '123', '1', '2019-03-14', ''),
(7, 'Ze', 'ze@gmail.com', '123', '1', '2019-03-14', 'giphy.gif'),
(8, 'Zezinho', 'zezinho@zezinho.com', '123', '1', '2019-03-14', 'i.png'),
(9, 'JOAZINHO', 'joao@joao.com', '123', '1', '2019-03-14', 'download.jpg'),
(10, 'ASJDHASUIHDAUSI', 'UIASHJDUASHJDOAS@SAUDHASU.COM', '123', '1', '2019-03-14', '1157358.jpg'),
(11, 'asddsad', 'dsa@gmail.com', '123', '1', '2019-03-14', '1157358.jpg'),
(12, 'asddsadfsdas', 'dsdasa@gmail.com', '123', '1', '2019-03-14', '1157358.jpg'),
(13, 'dassadd', 'dasdasd@gmail.com', '123', '1', '2019-03-14', '1157358.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id_filme`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
