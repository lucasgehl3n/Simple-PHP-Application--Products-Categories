-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ezoom
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Fontes','Alimentação de energia '),(2,'Gabinetes','Compartimentos para computadores'),(6,'Teclados','Linha mecânica'),(7,'Headsets',' Fone de ouvido + Microfone ');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-10 14:09:38


-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ezoom
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(110) NOT NULL,
  `valor` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria_idCategoria` int(11) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `caminhoImagem` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `fk_produto_categoria_idx` (`categoria_idCategoria`),
  CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Fonte 750W 80 Plus Bronze CX750',429.99,150,1,'- MTBF: 100,000 horas',NULL),(3,'Gabinete Carbide SPEC-OMEGA Preto e Vermelho com Lateral em Vidro CC-9011120-WW',480,1,2,'Sem descrição',NULL),(7,'Fonte Corsair 450W 80 Plus White VS450 - CP-9020170',219.9,340,1,'- Temperatura nominal de saída contínua: 30 ° C  - Potência contínua: 450 Watts',NULL),(8,'Fonte Corsair 400W 80 Plus White VS400 - CP-9020117',214.9,20,1,'- Tipo: ATX 12V v2.31 e EPS 2.92   - Potência máxima: 400W  - Barramento: trilho único de +12V   - T',NULL),(9,'Fonte Corsair 550W 80 Plus White VS550 - CP-9020171',299.99,150,1,'- Temperatura nominal de saída contínua: 30 ° C  - Potência contínua: 550 Watts',NULL),(10,'Fonte Corsair 1200W 80 Plus Platinum Modular HX1200i - CP-9020070',1731.35,10,1,'- MTBF: 100,000 hours  - 80 Plus Platinum',NULL),(11,'Gabinete em vidro temperado Carbide SPEC-06 — Branco',611,30,2,'O Carbide Series SPEC-06 da CORSAIR é um gabinete ATX mid-tower compacto que combina design minimali',NULL),(12,'Carbide Series SPEC-DELTA RGB Tempered Glass Mid-Tower ATX Gaming Case — Black',999.99,7,2,'The Carbide Series SPEC-DELTA RGB is a tempered glass mid-tower ATX case with striking angular styli',NULL),(13,'Gabinete em vidro temperado Carbide SPEC-06 — Preto',550.3,12,2,'O Carbide Series SPEC-06 da CORSAIR é um gabinete ATX mid-tower compacto que combina design minimali',NULL),(14,'Teclado Gamer Corsair Mecânico Switch Cherry MX Red, LED vermelho, ABNT2, K70 Lux CH-9101020-BR',517.9,30,6,'Especificações:  - Teclas: Cherry® MX Vermelho  - Luz de fundo: Red  - Dimensões: 436mm x 165mm x 38',NULL),(15,'Teclado Raptor K55 RGB, Corsair, Teclados',250.5,25,6,'Modos de iluminação RGB intuitivos, 6 teclas macro dedicadas, multi-teclas anti-ghosting e controles',NULL),(16,'Teclado Gamer Corsair K70 Lux RGB Mecânico Cherry Mx',630.99,35,6,'Com personalização praticamente ilimitada diretamente integrada na lendária construção da Corsair, a',NULL),(17,'Headset Gamer HyperX Cloud Stinger - HX-HSCS-BK/NA',299.99,1000,7,' Resposta de frequência 18Hz–23,000 Hz  - Impedância 30 ?  - Nível de pressão sonora 102 ± 3dBSPL/mW',NULL);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-10 14:09:38
