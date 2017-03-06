-- MySQL dump 10.14  Distrib 5.5.50-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.50-MariaDB

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
-- Table structure for table `stwChoice`
--

DROP TABLE IF EXISTS `stwChoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwChoice` (
  `stwChoice_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwQuestion_id` int(10) unsigned NOT NULL,
  `stwChoice_text` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwAnswer` set('yes','no') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`stwChoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=453 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwChoice`
--

LOCK TABLES `stwChoice` WRITE;
/*!40000 ALTER TABLE `stwChoice` DISABLE KEYS */;
INSERT INTO `stwChoice` VALUES (53,14,'การใช้เครื่องจักรหรืออุปกรณ์ราคาแพง','no'),(54,14,'การทำงานด้วยความชำนาญและเคยชิน','no'),(55,14,'สภาพที่ปลอดภัยจากอุบัติภัยต่างๆอันจะเกิดแก่ร่างกาย ชีวิต หรือทรัพย์สินในขณะที่ปฏิบัติงาน  ','yes'),(56,14,'การปฏิบัติงานในสภาพที่ร่างกายไม่พร้อม','no'),(57,15,'ตัวบุคคล','no'),(58,15,'สิ่งแวดล้อม','no'),(59,15,'สถานประกอบการ','yes'),(60,15,'เครื่องมือ','no'),(61,16,'เหตุการณ์ที่คาดคะเนได้','no'),(62,16,'ผู้ปฏิบัติละเลยเรื่องความปลอดภัย','no'),(63,16,'เหตุการณ์ที่เกิดขึ้นอย่างไม่คาดหมายและเมื่อเกิดขึ้นแล้วจะมีผลกระทบกระเทือนต่อการทำงาน ทำให้ทรัพย์สินเสียหายหรือ บุคคลได้รับบาดเจ็บ ','yes'),(64,16,'เกิดจากเคราะห์กรรมหรือโชคชะตา','no'),(65,17,'เสียงจากเครื่องบดหิน แร่ บดโลหะ เสียงจากเครื่องยนต์ ','no'),(66,17,'อุณหภูมิ ความชื้น และบริเวณสถานที่อับอากาศ ','no'),(67,17,'เขม่า ควัน ฝุ่น ละออง ไอระเหย ','yes'),(68,17,'ถูกทุกข้อ','no'),(69,18,'สารเคมีที่เข้าสู่ร่างกายโดยทางการหายใจ','no'),(70,18,'สารเคมีที่เข้าสู่ร่างกายโดยทางผิวหนัง','no'),(71,18,'สารเคมีที่เข้าสู่ร่างกายโดยทางปาก ','no'),(72,18,'สารเคมีที่เข้าสู่ร่างกายโดยทางหลอดเลือด','yes'),(73,19,'เป็นอนุภาคของของแข็งที่ได้รับความร้อนจากการหลอมจนกลายเป็นไอ ','no'),(74,19,'เป็นอนุภาคของคาร์บอนที่มีขนาดเล็กกว่า 1 ไมครอน ','no'),(75,19,'เป็นอนุภาคของแข็งที่ฟุ้งกระจายปะปนอยู่ในอากาศ','yes'),(76,19,'เป็นรูปของสารเคมีที่ฟุ้งกระจายในบรรยากาศทั่วไป ','no'),(77,20,'เป็นอนุภาคของแข็งที่ฟุ้งกระจายปะปนอยู่ในอากาศ ','no'),(78,20,' เป็นอนุภาคของคาร์บอนที่มีขนาดเล็กกว่า 1 ไมครอน ','no'),(79,20,'เป็นรูปของสารเคมีที่ฟุ้งกระจายในบรรยากาศทั่วไป ','no'),(80,20,'เป็นอนุภาคของของแข็งที่ได้รับความร้อนจากการหลอมจนกลายเป็นไอ ','yes'),(81,21,'เป็นอนุภาคของคาร์บอนที่มีขนาดเล็กกว่า 1 ไมครอน เกิดจากการเผาไหม้ที่ไม่สมบูรณ์ของวัตถุที่มีคาร์บอนเน็ท','yes'),(82,21,'เป็นอนุภาคของของแข็งที่ได้รับความร้อนจากการหลอมจนกลายเป็นไอ แล้วเกิดการควบแน่นในอากาศ','no'),(83,21,'เป็นอนุภาคของแข็งที่ฟุ้งกระจายปะปนอยู่ในอากาศ','no'),(84,21,'เป็นอนุภาคของของเหลวที่มีขนาดเล็กไม่เกิน 10 ไมครอน ','no'),(85,22,'เป็นอนุภาคของคาร์บอนที่มีขนาดเล็กกว่า 1 ไมครอน ','no'),(86,22,'เป็นอนุภาคของของแข็งที่ได้รับความร้อนจากการหลอมจนกลายเป็นไอ','no'),(87,22,'เป็นอนุภาคของแข็งที่ฟุ้งกระจายปะปนอยู่ในอากาศ ','no'),(88,22,'รูปของสารเคมีที่ฟุ้งกระจายในบรรยากาศทั่วไป ซึ่งเกิดจากธรรมชาติและโรงงานอุตสาหกรรม','yes'),(89,23,'ความประมาท','yes'),(90,23,'การจัดวางของให้เป็นระเบียบ','no'),(91,23,'ทำงานโดยมีเครื่องป้องกัน','no'),(92,23,'ปฏิบัติตามกฏระเบียบความปลอดภัย','no'),(93,24,'สะสาง','no'),(94,24,'สะบาย','yes'),(95,24,'สะอาด','no'),(96,24,'สร้างนิสัย','no'),(97,25,'การสร้างนิสัยที่ดี','no'),(98,25,'ถึงการทำความสะอาดเครื่องมือ เครื่องจักรอุปกรณ์ สถานที่ก่อนและหลังการใช้งาน','no'),(99,25,'การจัดการ จัดเก็บให้เป็นระเบียบเป็นหมวดหมู่ ','no'),(100,25,'ถึงการแยกแยะงานดี-งานเสีย ใช้-ไม่ใช้','yes'),(101,26,' รู้ งานที่ปฏิบัติว่ามีอันตรายอย่างไร มีขั้นตอนการทำงานอย่างไร ','no'),(102,26,' รู้ การเลือกใช้เครื่องมือ เครื่องจักร อุปกรณ์ ','no'),(103,26,'รู้ วิธีการใช้เครื่องมือ เครื่องจักร อุปกรณ์ ','no'),(104,26,'รู้จัดวิธีหลีกเลี่ยงงานที่อันตราย','yes'),(105,27,'เครื่องดับเพลิง','no'),(106,27,'อ่างล้างหน้า','yes'),(107,27,'สัญญาณเตือนภัย','no'),(108,27,'ที่ล้างตัวฉุกเฉิน','no'),(109,28,'อุปกรณ์ป้องกันใบหน้า ดวงตา ','no'),(110,28,'อุปกรณ์ป้องกันร่างกาย แขนขา','no'),(111,28,'อุปกรณ์ป้องกันมือ ','no'),(112,28,'อุปกรณ์เครื่องจักร','yes'),(113,29,'คือการป้องกันไม่ให้เกิดอุบัติเหตุซ้ำซ้อนขึ้น หรือมีการลดอันตรายที่เกิดขึ้นอย่างต่อเนื่อง','yes'),(114,29,'ถึงการเตรียมตัวล่วงหน้า เป็นการลดอันตรายให้น้อยลงหรือไม่เกิดอันตราย','no'),(115,29,'คือการป้องกันหรือมีการเตรียมการล่วงหน้า เพื่อไม่ให้เกิดอุบัติเหตุ ','no'),(116,29,'ถูกทุกข้อ','no'),(117,30,'การห้ามเลือด การผายปอด ','yes'),(118,30,'การผ่าตัด','no'),(119,30,'เอ็กซเรย์','no'),(120,30,'การฝั่งเข็ม','no'),(121,31,' ใช้เครื่องมือที่เหมาะสม','no'),(122,31,'การทำงานโดยมีอุปกรณ์ป้องกันอันตรายส่วนบุคค ','no'),(123,31,' ปฏิบัติตามกฎระเบียบข้อบังคับ','no'),(124,31,'เครื่องมือ เครื่องจักร หรืออุปกรณ์ในการทำงานที่ชำรุดหรือเสื่อมคุณภาพ','yes'),(125,32,' การป้องกันก่อนการเกิดอุบัติเหตุ','no'),(126,32,'การป้องกันขณะเกิดอุบัติเหตุ ','no'),(127,32,' การป้องกันหลังการเกิดอุบัติเหตุ ','no'),(128,32,'การป้องกันอุบัติเหตุบนท้องถนน','yes'),(129,33,'อุปกรณ์ลดเสียง ป้องกันหู ','yes'),(130,33,'อุปกรณ์ป้องกันร่างกาย แขนขา ','no'),(131,33,'อุปกรณ์ป้องกันเท้า','no'),(132,33,'อุปกรณ์ป้องกันใบหน้า ดวงตา','no'),(133,34,'เครื่องแต่งกาย และแบบฟอร์มที่เหมาะสมของผู้ปฏิบัติงาน ','yes'),(134,34,'การทำงานแบบเร่งรีบ','no'),(135,34,'การกระทำที่ขาดความรู้ ไม่ถูกวิธีหรือไม่ถูกขั้นตอน ','no'),(136,34,'การทำงานโดยสภาพร่างกายหรือจิตใจไม่ปกติ ','no'),(137,35,'เกิดจากการระเหยเป็นไอสารไปปนอยู่ในอากาศของก๊าซของสารที่เป็นของแข็งหรือของเหลว','yes'),(138,35,'เป็นอนุภาคของของเหลวที่มีขนาดเล็กไม่เกิน 10 ไมครอน ','no'),(139,35,'เป็นรูปของสารเคมีที่ฟุ้งกระจายในบรรยากาศทั่วไป ','no'),(140,35,'เป็นอนุภาคของคาร์บอนที่มีขนาดเล็กกว่า 1 ไมครอน ','no'),(141,36,'เป็นอนุภาคของของเหลวที่มีขนาดเล็กไม่เกิน 10 ไมครอน ','no'),(142,36,'เป็นสารเคมีที่เป็นอันตรายต่อสุขภาพซึ่งมีใช้กันมากในอุตสาหกรรม','yes'),(143,36,'เกิดจากการระเหยเป็นไอสารไปปนอยู่ในอากาศของก๊าซของสารที่เป็นของแข็งหรือของเหลว','no'),(144,36,'เป็นรูปของสารเคมีที่ฟุ้งกระจายในบรรยากาศทั่วไป ','no'),(145,37,'ใช้วัสดุที่เป็นอันตรายมาก','no'),(146,37,'การปิดคลุมต้นตอหรือแหล่งที่เกิดมีปัญหาสารเคมีหรือฝุ่นมาก ','yes'),(147,37,'ลดความชื้นหรือระบบเปียก','no'),(148,37,'ทำความสะอาดเมื่อจำเป็น','no'),(149,38,'การใช้วัสดุเครื่องป้องกันสำหรับร่างกาย','no'),(150,38,'แยกกระบวนการหรือเครื่องจักรที่เป็นต้นเหตุของปัญหาออกจากบริเวณที่มีคนทำงาน','no'),(151,38,'วิธีการปิดคลุมต้นตอหรือแหล่งที่เกิดมีปัญหาสารเคมีหรือฝุ่นมาก ','no'),(152,38,'การงดการใช้เครื่องจักร','yes'),(153,39,'เกิดจากการทำงานในสถานประกอบการ โรงงานอุตสาหกรรม เครื่องจักรในกระบวนการผลิต เช่น เสียงฟันเฟืองกระทบกัน','yes'),(154,39,'เกิดจากการทำงานที่ผิดปกติของเครื่องจักร','no'),(155,39,'เกิดจากการเร่งการทำงานของเครื่องจักร','no'),(156,39,'ถูกถุกข้อ','no'),(157,40,'หูอื้อ หูตึง จนกระทั่งสูญเสียการได้ยิน ','yes'),(158,40,'ประสาทสัมผัสผิดเพี้ยน','no'),(159,40,'การสั่งการของสมองลดลง','no'),(160,40,'ความสามารถในการขับขี่ลดลง','no'),(161,41,'องค์กรความปลอดภัยและอาชีวอนามัยของสหรัฐอเมริกา ','yes'),(162,41,'องค์การอาหารและยาของสหรัฐอเมริกา ','no'),(163,41,'องค์การสหประชาชาติ','no'),(164,41,'องค์การเภสัชกรรม','no'),(165,42,'ตรวจวิเคราะห์หาค่าระดับความดังของเสียงภายในสถานประกอบการว่าอยู่ในเกณฑ์ปกติหรือไม่','yes'),(166,42,'ไม่ใช้อุปกรณ์เครื่องป้องกันส่วนบุคคล ','no'),(167,42,'ไม่กำหนดระยะเวลาการทำงานที่ต้องสัมผัสกับเสียง ','no'),(168,42,'ลดการทำงานของเครื่องจักร','no'),(169,43,'แยกคนงานออกจากบริเวณต้นกำเนิดเสียงให้มากที่สุด','no'),(170,43,'ใช้วัสดุที่ช่วยดูดซับเสียงและไม่ทำให้เกิดเสียงสะท้อน ','no'),(171,43,'ควรมีการดูแลซ่อมแซมเครื่องจักรให้มีสภาพดี','no'),(172,43,'ถูกทุกข้อ','yes'),(173,44,'ทำให้ร่างกายเกิดความเมื่อยล้า ','no'),(174,44,'เกิดการระคายเคืองต่อเนื้อเยื่อ','no'),(175,44,'ประสิทธิภาพของการทรงตัวของร่างกายและการทำงานลดลง ','no'),(176,44,'ถูกถุกข้อ','yes'),(177,45,'เรย์โนด์ (Raynoud’s Syndrome) ','yes'),(178,45,'ออฟฟิศซินโดรม (office syndrome)','no'),(179,45,'ความดันสูง','no'),(180,45,'ความดันต่ำ','no'),(181,46,'ควรเลือกใช้เครื่องมืออุปกรณ์ที่มีความสมบูรณ์และลดแรงสั่นสะเทือน','no'),(182,46,'ลดเวลาการทำงานให้น้อยลง ','no'),(183,46,'การฝึกหัดอบรมการใช้เครื่องมืออุปกรณ์','no'),(184,46,'ถูกถุกข้อ','yes'),(185,47,'LUX','yes'),(186,47,' Fahrenheit','no'),(187,47,'Celsius','no'),(188,47,'KM/H','no'),(189,48,'แสงสว่างที่ได้จากธรรมชาติ ','no'),(190,48,'แสงสว่างจากการประดิษฐ์ขึ้น ','no'),(191,48,'แสงสว่างที่ได้จากธรรมชาติ และ แสงสว่างจากการประดิษฐ์ขึ้น ','yes'),(192,48,'ถูกถุกข้อ','no'),(193,49,'ควรจัดแสงสว่างโดยทั่วไปในพื้นที่การทำงานอย่างทั่วถึงทั้งบริเวณ ','no'),(194,49,'ควรจัดแสงสว่างเฉพาะที่โดยทั่วไป ','no'),(195,49,'การให้แสงสว่างเพิ่มขึ้นเฉพาะจุด ','no'),(196,49,'ถูกถุกข้อ','yes'),(197,50,' 4 ลักษณะ ','no'),(198,50,' 1 ลักษณะ ','no'),(199,50,' 2 ลักษณะ ','yes'),(200,50,' 3 ลักษณะ ','no'),(201,51,'ภูเขา','yes'),(202,51,'ทะเล','no'),(203,51,'อุโมงค์ใต้ดิน','no'),(204,51,'ใต้ทะเลลึก ','no'),(205,52,'บนติกสูง','no'),(206,52,'ใต้ทะเลลึก ','yes'),(207,52,'ภูเขา','no'),(208,52,'ที่สูงชัน','no'),(209,53,'โดยการสร้างความรู้ ความเข้าใจถึงอันตรายที่จะเกิดจากการทำงาน','no'),(210,53,'การฝึกอบรม','no'),(211,53,'การใช้อุปกรณ์เสริมในการทำงานอย่างปลอดภัย','no'),(212,53,'ถูกถุกข้อ','yes'),(213,54,'ขับเหงือ','yes'),(214,54,'ปัสสาวะ','no'),(215,54,'หัวใจเต้นเร็ว','no'),(216,54,'ใจสั่น','no'),(217,55,'เป็นลมหมดสติ','no'),(218,55,'อาการอ่อนเพลียเนื่องจากความร้อน','yes'),(219,55,'และโรคจิตประสาทเนื่องจากความร้อน ','no'),(220,55,' ความร้อนส่งผลกระทบต่อจิตใจ ','no'),(221,56,'2 ประเภท','yes'),(222,56,'5 ประเภท','no'),(223,56,'4 ประเภท','no'),(224,56,'3 ประเภท','no'),(225,57,'เป็นโรคที่เกิดจากการสัมผัสสัตว์ประเภทวัว ควาย ที่เป็นโรคและเกิดการติดต่อกันขึ้','yes'),(226,57,'เกิดจากการบริโภคนมที่ไม่ผ่านการฆ่าเชื้อหรือกระบวนการพาสเจอร์ไรด์','no'),(227,57,'ไม่มีข้อถูก','no'),(228,57,'ถูกถุกข้อ','no'),(229,58,'รังสีอัลฟา (Alpha','no'),(230,58,'เบตา (Beta)','no'),(231,58,'รังสีเอ็กส์ (X-ray)','no'),(232,58,'ถูกถุกข้อ','yes'),(233,59,' อุปกรณ์สำหรับผู้ปฏิบัติงานในการสวมใส่ขณะทำงานเพื่อป้องกันอันตรายอันอาจเกิดขึ้น เนื่องจากสภาพและสิ่งแวดล้อมของการทำงาน','no'),(234,59,'เป็นอุปกรณ์สำหรับช่วยป้องกันเพื่อลดอันตรายอันอาจจะเกิดขึ้นในขณะทำงานที่อาจมีเศษวัสดุ','no'),(235,59,'ใช้สำหรับป้องกันศีรษะจากการถูกกระแทก ชน หรือวัตถุตกจากที่สูงมากระทบศีรษะ ','no'),(236,59,'ถูกถุกข้อ','yes'),(237,60,'ทำมาจากพลาสติกหรือไฟเบอร์กลาส มีน้ำหนักเบาเหมาะสำหรับใช้งานทั่วไป','yes'),(238,60,'ทำมาจากวัสดุสังเคราะห์ประเภทพลาสติก หรือไฟเบอร์กลาส','no'),(239,60,'ทำมาจากวัสดุที่เป็นโลหะ เหมาะสำหรับการใช้งานป้องกันการกระแทก ','no'),(240,60,'ทำมาจากวัสดุสังเคราะห์ประเภทพลาสติก และไฟเบอร์กลาส','no'),(241,61,'4 ประเภท','yes'),(242,61,'5 ประเภท','no'),(243,61,'6 ประเภท','no'),(244,61,'7 ประเภท','no'),(245,62,'ควรเลือกชนิดที่มีกรอบกระชับ เหมาะกับการสวมใส่ในการทำงาน ','no'),(246,62,'ควรเลือกชนิดที่มีคุณสมบัติในการป้องกันอันตรายได้สูงสุด','no'),(247,62,'สามารถทำความสะอาดได้ง่ายเพื่อให้อยู่ในสภาพพร้อมใช้งานได้ทันที','no'),(248,62,'ถูกถุกข้อ','yes'),(249,63,' ใช้สำหรับงานที่เกี่ยวกับการใช้ของมีคม ','no'),(250,63,' ใช้สำหรับงานที่ต้องสัมผัสความร้อน','yes'),(251,63,'ใช้สำหรับงานไฟฟ้า ','no'),(252,63,'ใช้สำหรับงานที่ต้องสัมผัสสารเคมี','no'),(253,64,'สำหรับงานที่เกี่ยวกับการใช้ของมีคม ','yes'),(254,64,'สำหรับงานที่ต้องสัมผัสความร้อน','no'),(255,64,'สำหรับงานไฟฟ้า ','no'),(256,64,'สำหรับงานที่ต้องสัมผัสวัสดุที่หยาบ ','no'),(257,65,'สำหรับงานไฟฟ้า','no'),(258,65,'สำหรับงานที่ต้องสัมผัสสารเคมี','no'),(259,65,'ใช้สำหรับงานหลอมโลหะหรือถลุงโลหะ','yes'),(260,65,'สำหรับงานที่ต้องสัมผัสความร้อน','no'),(261,66,'สำหรับงานที่ต้องหยิบจับวัสดุอุปกรณ์เบา ๆ','yes'),(262,66,'สำหรับงานที่ต้องสัมผัสวัสดุที่หยาบ ','no'),(263,66,'สำหรับงานที่ต้องสัมผัสสารเคมี','no'),(264,66,'สำหรับงานที่เกี่ยวกับการใช้ของมีคม ','no'),(265,67,'สำหรับการใช้งานในสถานที่ทำงานที่พื้นเปียกชื้นตลอดเวลา','no'),(266,67,'ใช้สำหรับงานไฟฟ้าหรืองานที่อาจมีอันตรายจากการกระเด็นของเศษวัสดุหรือการระเบิดที่ไม่รุนแรงนัก ','yes'),(267,67,'หรับป้องกันอันตรายจากการทำงานที่มีความร้อนจากการถลุงหรือหลอมโลหะ','no'),(268,67,'สำหรับงานก่อสร้าง เพื่อป้องกันการกระแทก การกดทับ','no'),(269,68,'สาหรับป้องกันอันตรายจากการทำงานที่มีความร้อนจากการถลุงหรือหลอมโลหะ ','yes'),(270,68,'สำหรับการใช้งานในสถานที่ทำงานที่พื้นเปียก','no'),(271,68,'สำหรับใช้กับการทำงานที่อาจมีวัตถุสิ่งของน้ำหนัก','no'),(272,68,'ใช้สำหรับงานไฟฟ้าหรืองานที่อาจมีอันตรายจากการกระเด็นของเศษวัสดุหรือการระเบิด','no'),(273,69,'2 ชนิด ','yes'),(274,69,'3 ชนิด ','no'),(275,69,'4 ชนิด ','no'),(276,69,'5 ชนิด ','no'),(277,70,'ก๊าซแอมโมเนีย','yes'),(278,70,'สารกัมมันตภาพรังสี','no'),(279,70,'ฝุ่น ไอ ควัน','no'),(280,70,'ก๊าซคลอลิน','no'),(281,71,'ต้องตรวจสอบสภาพของเครื่องกรองอากาศ','no'),(282,71,'ตรวจสอบและทดสอบลิ้นเปิด-ปิดว่าอากาศผ่านเข้าออกได้เป็นอย่างดี','no'),(283,71,'หลังการใช้งานต้องมีการทำความสะอาด','no'),(284,71,'ถูกถุกข้อ','yes'),(285,72,'อลูมิเนียม','yes'),(286,72,'ทองแดง','no'),(287,72,'ทองขาว','no'),(288,72,'เหล็ก','no'),(289,73,' เครื่องกรองอากาศชนิดใช้แผ่นกรอง','no'),(290,73,' เครื่องกรองชนิดใช้วัสดุตัวกรอง ','no'),(291,73,'เครื่องกรองยาฆ่าแมลง','no'),(292,73,'หน้ากากกรองสารเคมี','yes'),(293,74,'ถูกทุกข้อ','yes'),(294,74,'หายใจเข้าไป','no'),(295,74,'การกิน','no'),(296,74,'ทางผิวหนัง','no'),(297,75,'9 กลุ่ม','yes'),(298,75,'12 กลุ่ม','no'),(299,75,'11 กลุ่ม','no'),(300,75,'10 กลุ่ม','no'),(301,76,'คาร์บอนไดออกไซด์','no'),(302,76,'ไนโตรเจน','no'),(303,76,'ไซยาไนด์','no'),(304,76,'ถูกทุกข้อ','yes'),(305,77,'ตะกั่ว','yes'),(306,77,'แอมโมเนีย','no'),(307,77,'ก๊าซคลอรีน','no'),(308,77,'กรด','no'),(309,78,'เซลล์ในร่ายกายเสียหรือตาย','no'),(310,78,'กล้ามเนื้อหัวใจกระตุกหรือหดตัว','no'),(311,78,'ระบบประสาทเกิดอาการชะงักงัน','no'),(312,78,'ถูกทุกข้อ','yes'),(313,79,'ปริมาณกระแสไฟฟ้า','yes'),(314,79,'สายดิน','no'),(315,79,'ขนาดสายไฟ','no'),(316,79,'ความยาวสายไฟ','no'),(317,80,'หุ้มฮนวนส่วนที่มีไฟ (Insulation of Live Parts) เช่นการหุ้มฉนวนสายไฟฟ้า','yes'),(318,80,'การต่อลงดินและมีเครื่องปลดวงจรอัตโนมัติ','no'),(319,80,'ใช้เครื่องตัดไฟรั่ว','no'),(320,80,'ใช้เครื่องใช้ไฟฟ้าชนิดฉนวน 2 ชั้น เช่นตู้หรือแผงสวิตช์','no'),(321,81,'ป้องกันโดยมีสิ่งกั้นหรือตู้ (Barrier of Enclosures) เช่นตู้หรือแผงสวิตช์','no'),(322,81,'ป้องกันโดยมีสิ่งที่กีดขวาง (Obatacles) เช่นลานหม้อแปลง','no'),(323,81,'ยกให้อยู่ในระยะที่เอื้อมไม่ถึง','no'),(324,81,'การต่อลงดินและมีเครื่องปลดวงจรอัตโนมัติ','yes'),(325,82,'ไฟฟ้าดูด (electric shock)','no'),(326,82,'ประกายไฟจากอาร์ก (arc flash)','no'),(327,82,'การระเบิดจากอาร์ก (arc blast)','no'),(328,82,'ถูกทุกข้อ','yes'),(329,83,'วัดความดันภายในภาชนะรับความดันเพื่อให้ผู้ควบคุมทราบ','yes'),(330,83,'รับไอน้ำที่ส่งมาจากภายนอก เข้าสู่ภายในภาชนะรับความดัน','no'),(331,83,'ระบายน้ำที่เกิดจากการกลั่นตัวของไอน้ำออกไปภายนอก','no'),(332,83,'ระบายความดันภายในภาชนะที่สูงเกินกว่าที่ปรับตั้งลิ้นนิรภัยไว้','no'),(333,84,'ทำจากวัสดุที่มีจุกหลอมละลายต่ำ ถ้าได้รับความร้อนสูง จุกหลอมละลายจะละลายตัวเอง ปล่อยก๊าซภายในออกไปภายนอก','yes'),(334,84,'มื่อความดันสูงเกินกว่าที่ฝาครอบจะทนได้ก็แตกหรือฉีกขาด','no'),(335,84,'ใช้สปริงกดลิ้นไว้ เมื่อความดันภายในสูงชนะแรงสปริงลิ้นจะเปิดออกระบายก๊าซออกไปภายนอก','no'),(336,84,'ถูกทุกข้อ','no'),(337,85,'3 ชนิด','yes'),(338,85,'6 ชนิด','no'),(339,85,'5 ชนิด','no'),(340,85,'4 ชนิด','no'),(341,86,'2 แบบ','yes'),(342,86,'5 แบบ','no'),(343,86,'4 แบบ','no'),(344,86,'3 แบบ','no'),(345,87,'าล์วถูกกดให้สัมผัสกับบ่าวาล์วด้วยแรงของสปริง การทำงานวาล์วจะเปิดก็ต่อเมื่อมีความดันที่สูงกว่าแรงกดสปริง','no'),(346,87,'ลักษณะการทำงานเป็นแบบเปิดอย่างรวดเร็ว หรือเปิดเป็นสัดส่วนกับ ความดันที่เพิ่มขึ้น','no'),(347,87,'วามดันที่เพิ่มขึ้นมากระทำต่อวาล์ว เมื่อความดันสูงถึงจุดที่ตั้งไว้วาล์วก็ จะเปิดออกเป็นสัดส่วน','no'),(348,87,'เป็นกลอุปกรณ์ระบายความดัน ชนิดที่เมื่อทำงานแล้วต้องเปลี่ยนหรือต้องปรับตั้งใหม่ซึ่งจะต่างกับวาล์วระบาย','yes'),(349,88,'มอก. 855-2532','yes'),(350,88,'มอก. 855-2533','no'),(351,88,'มอก. 855-2534','no'),(352,88,'มอก. 855-2535','no'),(353,89,'มอก. 27-2545','no'),(354,89,'มอก. 27-2544','no'),(355,89,'มอก. 27-2542','no'),(356,89,'มอก. 27-2543','yes'),(357,90,'มอก.370-2524','yes'),(358,90,'มอก.370-2525','no'),(359,90,'มอก.370-2526','no'),(360,90,'มอก.370-2527','no'),(361,91,'มอก. 359-2533','no'),(362,91,'มอก. 359-2532','no'),(363,91,'มอก. 359-2530','yes'),(364,91,'มอก. 359-2531','no'),(365,92,'ฉบับที่ 18 (พ.ศ.2528)','yes'),(366,92,'ฉบับที่ 19 (พ.ศ.2529)','no'),(367,92,'ฉบับที่ 20 (พ.ศ.2530)','no'),(368,92,'ฉบับที่ 21 (พ.ศ.2531)','no'),(369,93,'สีแดง','yes'),(370,93,'สีเหลือง','no'),(371,93,'สีเขียว','no'),(372,93,'สีฟ้า','no'),(373,94,'สีเหลือง','yes'),(374,94,'สีแดง','no'),(375,94,'สีฟ้า','no'),(376,94,'สีดำ','no'),(377,95,'การระเบิดจากภายในโครงสร้าง','yes'),(378,95,'การระเบิดของปฏิกิริยาเคมี','no'),(379,95,'การระเบิดที่เกิดจากการแตกตัวของนิวเคลียร์','no'),(380,95,'ถูกทุกข้อ','no'),(381,96,'การระเบิดที่เกิดจากการแตกตัวของนิวเคลียร์','no'),(382,96,'การระเบิดจากภายนอกโครงสร้าง','no'),(383,96,'การระเบิดจากภายในโครงสร้าง','no'),(384,96,'การระเบิดของปฏิกิริยาเคมี','yes'),(385,97,'น้ำมันก๊าด','no'),(386,97,'น้ำมันดีเซล','no'),(387,97,'น้ำมันเตา','no'),(388,97,'ไบโอดีเซล','yes'),(389,98,'รังสีใต้แดงและรังสีเหนือม่วง','yes'),(390,98,'รังสีใต้แดงและรังสีเหนือเงิน','no'),(391,98,'รังสีใต้ฟ้าและรังสีเหนือม่วง','no'),(392,98,'รังสีใต้แดงและรังสีเหนือแดง','no'),(393,99,'เชื้อเพลิง','no'),(394,99,'ออกซิเจน','no'),(395,99,'ความร้อน','no'),(396,99,'ถูกทุกข้อ','yes'),(397,100,'6 ประเภท','no'),(398,100,'5 ประเภท','yes'),(399,100,'7 ประเภท','no'),(400,100,'8 ประเภท','no'),(401,101,'เกิดจากเชื้อเพลิง ไม้ กระดาษ ผ้า ยาง','yes'),(402,101,'เกิดจากเชื้อเพลิงเหลวติดไฟ น้ำมันเบนซิน, น้ำมันดีเซล','no'),(403,101,'เกิดจากเชื้อเพลิงที่มีกระแสไฟฟ้า','no'),(404,101,'เป็นไฟที่เกิดจากเชื้อเพลิงที่เป็น โลหะลุกติดไฟ','no'),(405,102,'เกิดจากเชื้อเพลิง ไม้ กระดาษ ผ้า ยาง ','no'),(406,102,'เกิดจากเชื้อเพลิงที่เป็น โลหะลุกติดไฟ','no'),(407,102,'เกิดจากเชื้อเพลิงเหลวติดไฟ น้ำมันเบนซิน, น้ำมันดีเซล, ','yes'),(408,102,'เกิดจากเชื้อเพลิงที่มีกระแสไฟฟ้า','no'),(409,103,'เกิดจากเชื้อเพลิงที่เป็น โลหะลุกติดไฟ','no'),(410,103,'เกิดจากเชื้อเพลิงที่มีกระแสไฟฟ้า','no'),(411,103,'เกิดจากเชื้อเพลิง ไม้ กระดาษ ผ้า ยาง','no'),(412,103,'เกิดจากเชื้อเพลิงน้ำมันทำอาหาร น้ำมันพืช, น้ำมันจากสัตว์ ','yes'),(413,104,'5 ชนิด','yes'),(414,104,'7 ชนิด','no'),(415,104,'4 ชนิด','no'),(416,104,'6 ชนิด','no'),(417,105,'A','no'),(418,105,'B','no'),(419,105,'C','yes'),(420,105,'ไม่มีข้อถูก','no'),(421,106,'A','no'),(422,106,'B','no'),(423,106,'C','no'),(424,106,'K','yes'),(425,107,'ชนิดก๊าซคาร์บอนไดออกไซด์','no'),(426,107,'ฮาโลตรอนวั','yes'),(427,107,'ชนิดผงเคมีแห้ง','no'),(428,107,'ชนิดโฟม','no'),(429,108,'5 ปี','yes'),(430,108,'6 ปี','no'),(431,108,'7 ปี','no'),(432,108,'8 ปี','no'),(433,109,'10 ปี','yes'),(434,109,'15 ปี','no'),(435,109,'20 ปี','no'),(436,109,'25 ปี','no'),(437,110,'ใช้ลิฟท์','no'),(438,110,'พยายามดับไฟด้วยตนเอง','no'),(439,110,'หลบอยุ่ในห้องที่ไม่มีไฟ','no'),(440,110,'ใช้ทางบันไดหนีไฟ','yes'),(441,111,'พยายามขนของออกมาจากบ้าน','no'),(442,111,'รีบออกจากบ้านทันที','yes'),(443,111,'อยุ่ในบ้านรอคนมาช่วยเหลือ','no'),(444,111,'ไม่มีข้อถูก','no'),(445,112,'็H2O','no'),(446,112,'CO2','yes'),(447,112,'H1C0','no'),(448,112,'OC2','no'),(449,113,'ชนิดก๊าซคาร์บอนไดออกไซด์','yes'),(450,113,'ชนิดผงเคมีแห้ง','no'),(451,113,'ชนิดโฟม','no'),(452,113,'ชนิดเคมีสูตรน้ำ','no');
/*!40000 ALTER TABLE `stwChoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwContent`
--

DROP TABLE IF EXISTS `stwContent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwContent` (
  `stwContent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwLesson_id` int(10) unsigned NOT NULL,
  `stwContent_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwContent_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `stwContent_img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwYoutube` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`stwContent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwContent`
--

LOCK TABLES `stwContent` WRITE;
/*!40000 ALTER TABLE `stwContent` DISABLE KEYS */;
/*!40000 ALTER TABLE `stwContent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwDepartment`
--

DROP TABLE IF EXISTS `stwDepartment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwDepartment` (
  `stwDept_id` int(11) unsigned NOT NULL,
  `stwDept_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwDepartment`
--

LOCK TABLES `stwDepartment` WRITE;
/*!40000 ALTER TABLE `stwDepartment` DISABLE KEYS */;
INSERT INTO `stwDepartment` VALUES (1,'ITt'),(2,'HR'),(3,'OG'),(0,'rr');
/*!40000 ALTER TABLE `stwDepartment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwFileupload`
--

DROP TABLE IF EXISTS `stwFileupload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwFileupload` (
  `stwFileupload_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwFileupload_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwFileupload_path` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`stwFileupload_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwFileupload`
--

LOCK TABLES `stwFileupload` WRITE;
/*!40000 ALTER TABLE `stwFileupload` DISABLE KEYS */;
INSERT INTO `stwFileupload` VALUES (1,'er.docx','fileupload/er.docx');
/*!40000 ALTER TABLE `stwFileupload` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwLesson`
--

DROP TABLE IF EXISTS `stwLesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwLesson` (
  `stwLesson_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwLesson_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`stwLesson_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwLesson`
--

LOCK TABLES `stwLesson` WRITE;
/*!40000 ALTER TABLE `stwLesson` DISABLE KEYS */;
INSERT INTO `stwLesson` VALUES (1,'การแนะนำเกี่ยวกับการทำงานและความปลอดภัย'),(2,'สภาพแวดล้อมที่ปลอดภัยและที่เป็นอันตรายในการทำงาน'),(3,'การป้องกันอันตรายส่วนบุคคล'),(4,'การป้องกันอันตรายเฉพาะด้าน อันตรายจากสภาพต่าง ๆ'),(5,'การป้องกันและการดับเพลิง'),(6,'การปฐมพยาบาลเบื้องต้น');
/*!40000 ALTER TABLE `stwLesson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwPrefix`
--

DROP TABLE IF EXISTS `stwPrefix`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwPrefix` (
  `stwPrefix_id` int(11) unsigned NOT NULL,
  `stwPrefix_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwPrefix`
--

LOCK TABLES `stwPrefix` WRITE;
/*!40000 ALTER TABLE `stwPrefix` DISABLE KEYS */;
INSERT INTO `stwPrefix` VALUES (1,'นาย'),(2,'นาง'),(3,'นางสาว');
/*!40000 ALTER TABLE `stwPrefix` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwQuestion`
--

DROP TABLE IF EXISTS `stwQuestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwQuestion` (
  `stwQuestion_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwSubject_id` int(10) unsigned DEFAULT NULL,
  `stwQuestion_text` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`stwQuestion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwQuestion`
--

LOCK TABLES `stwQuestion` WRITE;
/*!40000 ALTER TABLE `stwQuestion` DISABLE KEYS */;
INSERT INTO `stwQuestion` VALUES (14,40,'ความปลอดภัยในการทำงาน คือ'),(15,40,'อุบัติเหตุ จะมีตัวการที่สำคัญยกเว้นข้อใด '),(16,40,'อุบัติเหตุ คือ'),(17,41,'อันตรายจากสภาพแวดล้อมทางเคมีคือข้อใด'),(18,41,'การเข้าสู่ร่างกายของสารเคมี มี 3 ทางยกเว้นข้อใด'),(19,41,'ฝุ่น (Dusts)  คือ'),(20,41,'ฟูม (Fumes) คือ'),(21,41,'ควัน (Smoke) คือ'),(22,41,'ก๊าซ (Gases) คือ'),(23,40,'การกระทำที่ไม่ปลอดภัยในการทำงานได้แก่'),(24,40,'หลักการ 5ส. ป้องกันอุบัติเหตุยกเว้นจข้อใด'),(25,40,'หลักการ 5ส. สะสาง หมายถึงข้อใด'),(26,40,'กฎ 5 รู้ ยกเว้นข้อใด'),(27,40,'ข้อใดไม่ใช่อุปกรณ์เกี่ยวกับความปลอดภัย '),(28,40,'ใช้อุปกรณ์ป้องกันอันตรายส่วนบุคคลเพื่อป้องกันอวัยวะของร่างกาย ยกเว้นข้อใด'),(29,40,'การป้องกันหลังการเกิดอุบัติเหตุ คือ'),(30,40,'ข้อใดเป็นการปฐมพยาบาล เบื้องต้น'),(31,40,'สาเหตุของการเกิดอุบัติเหตุคือข้อใด'),(32,40,'หลักการป้องกันอุบัติเหตุแบ่งแบ่งออกเป็น 3 สถานการณ์ยกเว้นข้อใด'),(33,40,'การทำงานในมีเสียงดังควรใช้อุปกรณ์ใดในการป้องกันอันตรายที่เกิดขึ้น'),(34,40,'ปัจจัยที่ต้องพิจารณาในการรักษาความปลอดภัยในการทำงานคือข้อใด'),(35,41,'ละออไอสาร (Vapor) คือ'),(36,41,'สารตัวทำละลาย (Solvents)  คือ'),(37,41,'ข้อใดคือการควบคุมฝุ่นละออง'),(38,41,'การควบคุมฝุ่นละออง ยกเว้นข้อใด'),(39,41,'เสียงรบกวน (Noise)  เกิดจากข้อใด'),(40,41,'และผลเสียที่สำคัญที่สุดคือทำให้สมรรถภาพการได้ยินลดลง  คือ'),(41,41,'OSHA คือ'),(42,41,'วิธีการป้องกันอันตรายจากเสียง คือข้อใด'),(43,41,'วิธีการควบคุมเสียงรบกวน คือข้อใด'),(44,41,'ผลของการสั่นสะเทือนจะทำให้โมเลกุลภายในเซลล์ของร่างกายเกิดการเคลื่อนไหวสั่นรัว คือข้อใด'),(45,41,'เส้นเลือดตีบทำให้เลือดไปเลี้ยงอวัยวะส่วนนั้นไม่พอ เรียกอีกอย่างว่า'),(46,41,'วิธีการป้องกันอันตรายจากแรงสั่นสะเทือน คือข้อใด'),(47,41,'หน่วยสัดแสงสว่างคือข้อใด'),(48,41,'แหล่งกำเนิดของแสงสว่างมาจากข้อใด'),(49,41,'หลักและวิธีการจัดแสงสว่างอย่างถูกต้องคือข้อใด'),(50,41,'ความกดดันบรรยากาศที่ผิดปกติ มีกี่ลักษณะ'),(51,41,'ความกดดันที่ต่ากว่าปกติ ได้แก่ที่ใด'),(52,41,'ความกดดันที่สูงกว่าปกติ ได้แก่ที่ใด'),(53,41,'การป้องกันอันตรายจากความกดดันบรรยากาศที่ผิดปกติ คือข้อใด'),(54,41,'ร่างกายกำจัดความร้อนได้วิธีใด'),(55,41,'Heat Stroke คือ'),(56,41,'รังสี (Radiation) แบ่งเป็นกี่ประเภท'),(57,41,'โรคแอนแทรก คือ'),(58,41,'รังสีที่แตกตัวหรือกัมมันตภาพรังสี คือข้อใด'),(59,42,'ความหมายและความสำคัญ อุปกรณ์ป้องกันอันตรายส่วนบุคคล คือข้อใด'),(60,42,'หมวกนิรภัยประเภท A คือข้อใด'),(61,42,'หมวกนิรภัยมีกี่ประเภท'),(62,42,'การเลือกใช้แว่นนิรภัยควรปฏิบัติควรคำนึงถึงข้อใด'),(63,42,'ถุงมือใยหิน  เหมาะกับงานประเภทใด'),(64,42,'ถุงมือใยโลหะ เหมาะกับงานประเภทใด'),(65,42,'ถุงมือหนังเสริมใยเหล็ก เหมาะกับงานประเภทใด'),(66,42,'ถุงมือผ้าหรือเส้นใยทอ เหมาะกับงานประเภทใด'),(67,42,'รองเท้าชนิดหุ้มข้อและเป็นฉนวนที่ดี เหมาะกับงานประเภทใด'),(68,42,'รองเท้าหุ้มแข้ง  เหมาะกับงานประเภทใด'),(69,42,'เครื่องช่วยหายใจ แบ่งออกเป็นกี่ชนิด'),(70,42,'แถบสีเขียวหน้ากากป้องกันสารพิษ ใช้กับสารชนิดใด'),(71,42,'ข้อใดคือวิธีการใช้เครื่องกรองอากาศอย่างปลอดภัย'),(72,42,'ชุดป้องกันความร้อนทำมาจากสิ่งใด'),(73,42,'สมชายทำงานเป็นเด็กปั้ม สมชายควรใส่หน้ากากใด'),(74,43,'สารเคมีเข้าสู่ร่างกายโดยวิธีใด'),(75,43,'ความเป็นพิษของสารเคมี แบ่งได้กี่กลุ่ม'),(76,43,'สารใดที่ทำให้หมดสติได้ '),(77,43,'สารใด กดไขกระดูก ทำให้เม็ดเลือดแดงน้อยก'),(78,43,'ผลของกระแสไฟฟ้าต่อร่างกายคือข้อใด'),(79,43,'ความรุนแรงของอัตรายของไฟฟ้าขึ้นอยู่กับสิ่งใด'),(80,43,'ข้อใดคือการป้องกันกรณีสัมผัสกระแสไฟฟ้าโดยตรง'),(81,43,'ข้อใดคือการป้องกันกรณีสัมผัสกระแสไฟฟ้าโดยทางอ้อม'),(82,43,'ลักษณะของอันตรายจากไฟฟ้าที่เกิดขึ้นกับบุคคล คือข้อใด'),(83,43,'มาตรวัดความดันคือข้อใด'),(84,43,'จุกหลอมละลาย ทำหน้าที่ใด'),(85,43,'Pressure Relief Valve(วาล์วระบายความดัน)  มีกี่ชนิด'),(86,43,'ASME แบ่งกลอุปกรณ์ระบายความดันออกเป็นกี่แบบ'),(87,43,'Nonreclosing Pressure Relief Devices คือข้อใด'),(88,43,'มาตรฐานหม้อน้ำคือข้อใด'),(89,43,'มาตรฐานถังก๊าซปิโตรเลียมเหลวคือข้อใด'),(90,43,'มาตรฐานถังก๊าซปิโตรเลียมเหลวสําหรับเครื่องยนต์สันดาปภายใน คือข้อใด'),(91,43,'มาตรฐานภาชนะบรรจุก๊าซทนความดันแบบไม่มีตะเข็บคือข้อใด'),(92,43,'กำหนดให้การสร้างหม้อน้ำจะต้องดำเนินการตามประกาศกระทรวงอุตสาหกรรม ฉบับใด'),(93,43,'น้ำมันเบนซินออกเทน 91 มีสีใด'),(94,43,'น้ำมันเบนซินออกเทน 95 มีสีใด'),(95,43,'แรงอัดระเบิดที่เกิดจากหม้อน้ำของเครื่องจักรอุตสาหกรรม คือข้อใด'),(96,43,'การหยดน้ำยาเครื่องปรับอากาศลงบนด่างทับทิม เป็นการระเบิดประเภทใด'),(97,43,'น้ำนันใดจากพืช'),(98,43,'รังสีชนิดใดทำให้เกิดอันตรายต่อสายตา'),(99,48,'ปัจจัยใดที่ทำให้เกิดไฟไหม้ '),(100,48,'ประเภทของไฟ ตามมาตรฐาน NFPA 10 แบ่งเป็นกี่ประเภท'),(101,48,'ไฟประเภท A คือข้อใด'),(102,48,'ไฟประเภท B คือ'),(103,48,'ไฟประเภท K คือ'),(104,48,'สารดับเพลิงที่ใช้อยู่ในถังดับเพลิงทั่วไปมีกี่ชนิก'),(105,48,'สารดับเพลิงชนิดโฟมไม่สามารถนำไปดับไฟประเภทใด'),(106,48,'สารดับชนิดผงเคมีแห้งไม่สามารถนำไปดับไฟประเภทใด'),(107,48,'ห้องคอมพิวเตอร์ คลีนรูม ไลน์การผลิต ห้องไฟฟ้า ควรใช้สารดับเพลิงชนิดใด'),(108,48,'ถังดับเพลิงชนิดผงเคมีแห้ง (ถังสีแดง) มีอายุประมาณกีปี'),(109,48,'ถังดับเพลิงชนิดฮาโลตรอนวัน (ถังสีเขียว) และชนิดก๊าซ CO2 มีอายุประมาณกกี่ปี'),(110,48,'วิธีใดคือวิธีที่ถูกออกจากสถานที่เกิดไฟไหม้'),(111,48,'สิ่งที่ควรปฏิบัติเพื่อเอาชีวิตรอดจากเพลิงไหม้ในบ้านคือข้อใด'),(112,48,'ก๊าซคาร์บอนไดออกไซด์ คือข้อใด'),(113,48,'การใช้งานในห้องเครื่องจักร Line การผลิต อุตสาหกรรมควรใช้สารใดในการดับเพลง');
/*!40000 ALTER TABLE `stwQuestion` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `delstwChoice` AFTER DELETE ON `stwQuestion` FOR EACH ROW BEGIN
	DELETE FROM stwChoice
    	WHERE stwQuestion_id = old.stwQuestion_id;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `stwShowlogo`
--

DROP TABLE IF EXISTS `stwShowlogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwShowlogo` (
  `stwShowlogo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwUrllogo_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`stwShowlogo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwShowlogo`
--

LOCK TABLES `stwShowlogo` WRITE;
/*!40000 ALTER TABLE `stwShowlogo` DISABLE KEYS */;
INSERT INTO `stwShowlogo` VALUES (1,1);
/*!40000 ALTER TABLE `stwShowlogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwStatus`
--

DROP TABLE IF EXISTS `stwStatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwStatus` (
  `stwStatus_id` int(11) unsigned NOT NULL,
  `stwStatus_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwStatus`
--

LOCK TABLES `stwStatus` WRITE;
/*!40000 ALTER TABLE `stwStatus` DISABLE KEYS */;
INSERT INTO `stwStatus` VALUES (1,'Administrator'),(2,'Super User'),(3,'User');
/*!40000 ALTER TABLE `stwStatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwSubject`
--

DROP TABLE IF EXISTS `stwSubject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwSubject` (
  `stwSubject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwSubject_text` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stwDate_test` date DEFAULT NULL,
  `stwSubject_past` tinyint(2) unsigned NOT NULL,
  `stwTime_start` time DEFAULT NULL,
  `stwTime_end` time DEFAULT NULL,
  PRIMARY KEY (`stwSubject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwSubject`
--

LOCK TABLES `stwSubject` WRITE;
/*!40000 ALTER TABLE `stwSubject` DISABLE KEYS */;
INSERT INTO `stwSubject` VALUES (40,'การแนะนำเกี่ยวกับการทำงานและความปลอดภัย','2017-02-15',70,'12:00:00','15:00:00'),(41,'สภาพแวดล้อมที่ปลอดภัยและที่เป็นอันตรายในการทำงาน','2017-02-18',75,'14:28:00','18:00:00'),(42,'การป้องกันอันตรายส่วนบุคคล','2017-02-17',50,'12:00:00','15:00:00'),(43,'การป้องกันอันตรายเฉพาะด้าน อันตรายจากสภาพต่าง ๆ','2017-02-18',50,'12:40:00','15:00:00'),(44,'การปฐมพยาบาลเบื้องต้น','2017-02-18',50,'00:00:00','02:00:00'),(48,'การป้องกันและการดับเพลิง','2017-02-18',50,'00:30:00','02:30:00');
/*!40000 ALTER TABLE `stwSubject` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `delstwQuestion` AFTER DELETE ON `stwSubject` FOR EACH ROW BEGIN
	DELETE FROM stwQuestion 
    	WHERE stwSubject_id = old.stwSubject_id;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `stwUrllogo`
--

DROP TABLE IF EXISTS `stwUrllogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwUrllogo` (
  `stwUrllogo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwUrlname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`stwUrllogo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwUrllogo`
--

LOCK TABLES `stwUrllogo` WRITE;
/*!40000 ALTER TABLE `stwUrllogo` DISABLE KEYS */;
INSERT INTO `stwUrllogo` VALUES (1,'Images/logo.gif'),(36,'photo/wwf-logo-design.jpg'),(37,'photo/1461349110_9239.jpg');
/*!40000 ALTER TABLE `stwUrllogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwUser`
--

DROP TABLE IF EXISTS `stwUser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwUser` (
  `stwUser_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stwUsername` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwPassword` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwFirstname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwLastname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwEmail` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `stwTel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stwGender` tinyint(1) unsigned NOT NULL,
  `stwActivate` tinyint(1) unsigned NOT NULL,
  `stwDept_id` int(11) unsigned NOT NULL,
  `stwStatus_id` int(11) unsigned NOT NULL,
  `stwPrefix_id` int(11) unsigned NOT NULL,
  `stwCreated_date` datetime NOT NULL,
  `stwRequest` tinyint(1) unsigned NOT NULL,
  `stwProfileurl` varchar(250) COLLATE utf8_unicode_ci DEFAULT 'Images/avatar.png	',
  PRIMARY KEY (`stwUser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=374 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwUser`
--

LOCK TABLES `stwUser` WRITE;
/*!40000 ALTER TABLE `stwUser` DISABLE KEYS */;
INSERT INTO `stwUser` VALUES (361,'admin','e10adc3949ba59abbe56e057f20f883e','','','','',0,1,0,1,0,'2016-11-12 14:48:36',0,'photos/teacher.png'),(367,'leavetar12345','2b792dabb4328a140caef066322c49ff','niwat','thaiprathom','kootardodo@hotmail.com','0944174005',1,1,0,2,1,'2017-01-27 07:38:19',3,'Images/avatar.png	'),(368,'nattee','8892dda9ffc2c5c15344bfaae3ea2fdd','นัทที','สุวานิช','natteesuvanit@outlook.clo.th','0876776704',1,1,1,3,1,'2017-01-30 10:26:18',3,'Images/avatar.png	'),(369,'445566','2b792dabb4328a140caef066322c49ff','thaiprathom','niwat','kodotardodo@hotmail.com','0944174005',1,1,1,2,1,'2017-01-31 09:42:17',3,'Images/avatar.png	'),(370,'ball123659','61017160b25e937e7f8d430c90b1dc84','ธนา','จันทร์อบ','ball123659@gmail.com','0867745834',1,1,1,2,1,'2017-01-31 16:18:59',1,'Images/avatar.png	'),(371,'leavetar1234596','5d780364c63ff5cc9005fdd53d39a52a','niwat','thaiprathom','kootarddodo@hotmail.com','0944174005',1,1,1,2,1,'2017-02-03 14:09:13',3,'Images/avatar.png	'),(372,'johntar','5d780364c63ff5cc9005fdd53d39a52a','j','k','k@hotmail.com','0944174005',1,2,3,3,3,'2017-02-09 11:14:34',1,'Images/avatar.png	'),(373,'kromma','4297f44b13955235245b2497399d7a93','krommavut','nongnuch','krommavut@gmail.com','1231231233',1,2,2,3,1,'2017-02-14 08:41:43',1,'photos/DSC053931.jpg');
/*!40000 ALTER TABLE `stwUser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwscore`
--

DROP TABLE IF EXISTS `stwscore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwscore` (
  `stwUser_id` int(10) unsigned NOT NULL,
  `stwSubject_id` int(10) unsigned NOT NULL,
  `amount` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwscore`
--

LOCK TABLES `stwscore` WRITE;
/*!40000 ALTER TABLE `stwscore` DISABLE KEYS */;
/*!40000 ALTER TABLE `stwscore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stwtesting`
--

DROP TABLE IF EXISTS `stwtesting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stwtesting` (
  `stwUser_id` int(10) unsigned NOT NULL,
  `stwSubject_id` int(10) unsigned NOT NULL,
  `stwQuestion_id` int(10) unsigned NOT NULL,
  `stwChoice_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`stwUser_id`,`stwSubject_id`,`stwQuestion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stwtesting`
--

LOCK TABLES `stwtesting` WRITE;
/*!40000 ALTER TABLE `stwtesting` DISABLE KEYS */;
/*!40000 ALTER TABLE `stwtesting` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-16 11:24:14