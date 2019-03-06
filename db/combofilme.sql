-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Mar-2019 às 18:37
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
-- Estrutura da tabela `alugado`
--

CREATE TABLE `alugado` (
  `id_usuario` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `data_alugado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

INSERT INTO `filme` (`id_filme`, `tipo`, `titulo`, `genero`, `duracao`, `pais_origem`, `censura`, `url_img`, `url_video`, `sinopse`, `data_cadastro`) VALUES
(2, '', 'Animais Fantásticos: Os Crimes', 'aventura', 134, 'EUA', 10, 'CinePOP-Animais-Fantásticos.jpg', '', 'Newt Scamander reencontra os queridos amigos Tina Goldstein, Queenie Goldstein e Jacob Kowalski. Ele é recrutado pelo seu antigo professor em Hogwarts, Alvo Dumbledore, para enfrentar o terrível bruxo das trevas Gellert Grindelwald, que escapou da custódia da Macusa (Congresso Mágico dos EUA) e reúne seguidores, dividindo o mundo entre seres de magos sangue puro e seres não-mágicos.', '0000-00-00 00:00:00'),
(3, '', 'Aquaman', 'aventura', 143, 'EUA', 14, 'CinePOP-Aquaman.jpg', '', 'Metade humano e semi atlante, Arthur Curry (Jason Momoa) parte em uma jornada junto de seus aliados Mera (Amber Heard) e Vulko (Willem Dafoe) para encontrar o tridente do rei, uma arma mítica capaz de controlar os sete mares. O trio precisa cumprir seu objetivo antes de Orm (Patrick Wilson), meio-irmão de Arthur que pretende derrubá-lo e tomar o trono de Atlântida.', '0000-00-00 00:00:00'),
(6, '', 'Vikings', 'acao', 18, 'EUA', 16, 'serie1.jpg', '', 'A série é inspirada nas histórias de invasões, comércio e exploração dos Nórdicos da Escandinávia medieval. A série segue as explorações do lendário líder Viking Ragnar Lothbrok e sua tripulação e família, como notavelmente foi estabelecido nas sagas Ragnars saga Loðbrókar e Ragnarssona þáttr do século XIII, assim como na obra do Saxão Gramático do século XII, Gesta Danorum. As sagas lendárias nórdicas eram parcialmente contos de ficção baseados na tradição oral nórdica, escritas cerca de 200 à 400 anos após os eventos que descrevem. Mais inspirações são tiradas de fontes históricas da época, como os registros do ataque Viking em Lindisfarne, retratado no segundo episódio, ou a conta de Amade ibne Fadalane sobre os Vikings Volga, do século X. A série se passa no início da era viking, marcada pelo ataque de Lindisfarne, em 793.', '0000-00-00 00:00:00'),
(7, '', 'The Flash', 'aventura', 14, 'EUA', 0, 'serie2.jpg', '', 'Após testemunhar o estranho assassinato de sua mãe e a injusta acusação de seu pai pelo crime, Barry Allen fica sob os cuidados do detetive Joe West e sua filha Iris West. Barry se torna brilhante, mas socialmente, um cientista forense desconhecido trabalhando para o Departamento de Polícia de Central City. Sua obsessão por seu trágico passado faz com que ele fique separado das demais pessoas ao seu redor; ele investiga casos frios, ocorrências paranormais, e vazamentos de ponta de avanços científicos que podem dar uma luz no caso do assassinato de sua mãe. Ninguém acredita em sua descrição do crime — que uma bola de raio com o rosto de um homem invadiu sua casa naquela noite e matou sua mãe — e Barry é forçado a procurar por si mesmo pistas que limpem o nome de seu pai. Quatorze anos depois da morte de sua mãe, uma explosão de um avançado Acelerador de Partículas, durante sua apresentação ao público, banha a cidade com uma forma de radiação previamente desconhecida durante uma tempest', '0000-00-00 00:00:00'),
(11, '', 'Sex Education', 'comedia', 0, 'EUA', 16, 'serie5.jpg', '', 'dsdsdds', '0000-00-00 00:00:00'),
(12, '', 'kingsman', 'aventura', 134, 'EUA', 0, 'Kingsman-3.jpg', '', 'tydydfyfytfytfytfyt', '0000-00-00 00:00:00'),
(14, '', 'Game of Thrones', 'aventura', 0, 'EUA', 16, 'serie3.jpg', '', '....', '0000-00-00 00:00:00'),
(16, '', 'O Feeding', 'terror', 0, 'BRONZIL', 18, 'O dia que o jogo bota 3 pedra do caminho.PNG', '', 'A maldição da solo-queue ataca novamente e o inocente raphael achava que seria uma partida normal , mas  o que ele nao esperava era que seu passado lhe perseguiria !', '0000-00-00 00:00:00'),
(17, '', 'Era uma vez', 'adulto', 120, 'EUA', 14, 'Screen08.png', '', 'E RAPAZ', '2019-03-06 14:11:11');

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
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `pwd`, `privilegio`, `data_cadastro`) VALUES
(1, 'Higor Oliveira', 'higor@hotmail.com', '34093800', '2', '0000-00-00'),
(2, 'Ruan', 'ruan@hotmail.com', '123456', '2', '0000-00-00'),
(3, 'Lucas', 'lucas@hotmail.com', '123456', '2', '2019-02-05'),
(4, 'Rafael', 'rafael@gmail.com', '123456', '2', '2019-02-05'),
(5, 'raphael', 'raphaelradiche@hotmail.com', '235912', '2', '2019-03-06');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
