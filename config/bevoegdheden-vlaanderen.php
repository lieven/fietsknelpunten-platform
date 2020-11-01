<?php


$postcodesOostVlaanderen = array('9300','9308','9310','9320','9470','9472','9473','9500','9506','9450','9451','9550','9551','9552','9340','9400','9401','9402','9403','9404','9406','9520','9521','9620','9420','9290','9255','9200','9220','9270','9280','9250','9230','9260','9240','9960','9961','9968','9900','9970','9971','9990','9991','9992','9980','9981','9982','9988','9060','9880','9881','9800','9840','9070','9940','9890','9000','9030','9031','9032','9040','9041','9042','9050','9051','9052','9910','9080','9920','9921','9090','9820','9180','9810','9850','9860','9830','9831','9950','9185','9930','9931','9932','9870','9770','9771','9772','9700','9600','9750','9660','9661','9690','9790','9667','9570','9571','9572','9680','9681','9688','9630','9636','9120','9130','9150','9160','9170','9100','9111','9112','9190','9140');
$postcodesWestVlaanderen = array('8730','8370','8000','8200','8310','8380','8340','8490','8020','8820','8210','8211','8377','8300','8301','8600','8650','8680','8610','8647','8900','8902','8904','8906','8908','8957','8970','8972','8978','8940','8980','8950','8951','8952','8953','8954','8956','8958','8920','8640','8570','8572','8573','8580','8581','8582','8583','8540','8530','8531','8500','8501','8510','8511','8520','8860','8930','8790','8791','8792','8793','8560','8550','8551','8552','8553','8554','8587','8450','8470','8480','8430','8431','8432','8433','8434','8400','8460','8420','8421','8830','8770','8870','8880','8810','8890','8800','8840','8720','8760','8780','8740','8755','8700','8710','8750','8850','8851','8690','8691','8660','8670','8620','8630');
$postcodesProvincieAntwerpen = array('2630','2000','2018','2020','2030','2040','2050','2060','2100','2140','2170','2180','2600','2610','2660','2530','2531','2850','2150','2930','2960','2650','2910','2620','2540','2920','2950','2550','2547','2640','2845','2520','2840','2627','2970','2900','2940','2110','2160','2990','2240','2242','2243','2980','2070','2390','2590','2820','2880','2570','2220','2221','2222','2223','2500','2800','2801','2811','2812','2560','2580','2870','2890','2860','2861','2830','2370','2387','2490','2491','2340','2480','2440','2280','2288','2200','2270','2230','2320','2321','2322','2323','2328','2235','2460','2275','2450','2330','2400','2250','2360','2380','2381','2382','2470','2310','2300','2290','2350','2260','2430','2431');
$postcodesVlaamsBrabant = array('1730','1731','1650','1651','1652','1653','1654','1547','1700','1701','1702','1703','1570','1755','1850','1851','1852','1853','1500','1501','1502','1540','1541','1560','1910','1880','1770','1840','1830','1831','1860','1861','1785','1745','3090','1670','1671','1673','1674','1600','1601','1602','1820','1740','1741','1742','1800','1930','1931','1932','1933','1804','1980','1981','1982','1760','1761','1620','1950','1630','1640','1780','1970','1750','1790','3200','3201','3202','3130','3460','3461','3060','3061','3360','3190','3191','3370','3290','3293','3294','3450','3454','3150','3020','3320','3321','3220','3221','3040','3140','3470','3471','3472','3473','3070','3071','3078','3400','3401','3404','3000','3001','3010','3012','3018','3210','3211','3212','3050','3051','3052','3053','3054','3110','3111','3118','3080','3300','3120','3128','3440','3350','3270','3271','3272','3390','3391','3380','3381','3384');
$postcodesLimburg = array('3665','3580','3581','3582','3583','3590','3600','3890','3891','3545','3500','3501','3510','3511','3512','3540','3970','3971','3560','3850','3660','3800','3803','3806','3980','3520','3690','3945','3550','3950','3960','3640','3920','3680','3910','3900','3990','3930','3940','3941','3530','3670','3650','3570','3740','3742','3746','3840','3870','3717','3730','3732','3720','3721','3722','3723','3724','3620','3621','3770','3700','3830','3831','3832','3630','3631','3790','3791','3792','3793','3798');

$postcodesVlaanderen = array_merge($postcodesWestVlaanderen, $postcodesOostVlaanderen, $postcodesProvincieAntwerpen, $postcodesVlaamsBrabant, $postcodesLimburg);


$jurisdictionID = 0;

$jurisdictions = array
(
	// Gewesten
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vlaams Gewest',
		'description' => 'Agentschap Wegen en Verkeer',
		'country' => 'BE',
		'postalcodes' => $postcodesVlaanderen,
		'types' => array('gewestweg'),
		'email' => array
		(
			'AWV Antwerpen' => 'wegen.antwerpen@vlaanderen.be',
			'AWV Limburg' => 'wegen.limburg@vlaanderen.be',
			'AWV Vlaams-Brabant' => 'wegen.vlaamsbrabant@vlaanderen.be',
			'AWV Oost-Vlaanderen' => 'wegen.oostvlaanderen@vlaanderen.be',
			'AWV West-Vlaanderen' => 'wegen.westvlaanderen@vlaanderen.be',
		),
		'links' => array
		(
			'Twitter' => 'https://twitter.com/wegenenverkeer',
			'Website' => 'http://wegenenverkeer.be',
		),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Brussels Hoofdstedelijk Gewest',
		'country' => 'BE',
		'postalcodes' => array('1070','1160','1082','1000','1020','1120','1130','1040','1140','1190','1083','1050','1090','1081','1080','1060','1210','1030','1180','1170','1200','1150'),
		'types' => array('gewestweg'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waals Gewest',
		'country' => 'BE',
		'postalcodes' => array('1320','1420','1421','1428','1440','1325','1490','1470','1471','1472','1473','1474','1476','1390','1315','1460','1461','1370','1310','1435','1400','1401','1402','1404','1360','1330','1331','1332','1480','1495','1410','1300','1301','1450','1357','1380','1350','1340','1341','1342','1348','1367','1430','1457','7800','7801','7802','7803','7804','7810','7811','7812','7822','7823','7970','7971','7972','7973','7320','7321','7322','7940','7941','7942','7943','7950','7951','7890','7880','7910','7911','7912','7160','6000','6001','6010','6020','6030','6031','6032','6040','6041','6042','6043','6044','6060','6061','6200','6180','6181','6182','6183','6240','6220','6221','6222','6223','6224','6140','6141','6142','6280','7170','6110','6111','6230','6238','7180','7181','6250','6210','6211','7300','7301','7370','7080','7350','7050','7870','7000','7011','7012','7020','7021','7022','7024','7030','7031','7032','7033','7034','7390','7380','7382','7330','7331','7332','7333','7334','7340','7387','7040','7041','7700','7711','7712','7780','7781','7782','7783','7784','7090','7850','7100','7110','7860','7861','7862','7863','7864','7866','7070','7830','7060','7061','7062','7063','7190','7191','6150','6500','6511','7130','7131','7133','7134','6460','6461','6462','6463','6464','6560','6440','6441','6540','6542','6543','6567','6590','6591','6592','6593','6594','6596','6530','6531','6532','6533','6534','6536','7120','6120','7140','7141','6470','7640','7641','7642','7643','7760','7730','7740','7742','7743','7600','7601','7602','7603','7604','7608','7610','7611','7618','7500','7501','7502','7503','7504','7506','7520','7521','7522','7530','7531','7532','7533','7534','7536','7538','7540','7542','7543','7548','7620','7621','7622','7623','7624','7900','7901','7903','7904','7906','7750','4540','4210','4560','4190','4180','4181','4217','4218','4500','4570','4577','4550','4590','4537','4530','4520','4160','4161','4162','4163','4480','4557','4430','4431','4432','4340','4342','4920','4690','4610','4050','4051','4052','4053','4170','4171','4606','4607','4608','4130','4620','4621','4623','4624','4040','4041','4042','4450','4451','4452','4453','4458','4000','4020','4030','4031','4032','4680','4681','4682','4683','4684','4420','4100','4101','4102','4630','4631','4632','4633','4140','4141','4600','4601','4602','4460','4670','4671','4672','4400','4120','4121','4122','4870','4770','4771','4880','4837','4760','4761','4750','4820','4821','4700','4701','4650','4651','4652','4653','4654','4845','4720','4721','4728','4990','4830','4831','4834','4710','4711','4960','4877','4860','4861','4730','4731','4780','4782','4783','4784','4900','4970','4987','4910','4800','4801','4802','4950','4840','4841','4980','4983','4790','4791','4850','4851','4852','4890','4257','4260','4261','4263','4367','4357','4347','4250','4252','4253','4254','4280','4287','4360','4350','4351','4470','4300','4219','4317','6700','6717','6790','6791','6792','6630','6780','6781','6782','6600','6686','6687','6688','6637','6660','6661','6662','6663','6666','6690','6692','6698','6640','6642','6670','6671','6672','6673','6674','6680','6681','6940','6941','6997','6990','6980','6982','6983','6984','6986','6900','6950','6951','6952','6953','6987','6970','6971','6972','6960','6880','6830','6831','6832','6833','6834','6836','6838','6929','6887','6860','6890','6840','6850','6851','6852','6853','6856','6870','6927','6920','6921','6922','6924','6800','6810','6811','6812','6813','6740','6741','6742','6743','6820','6821','6823','6824','6769','6750','6747','6730','6760','6761','6762','6720','6721','6723','6724','6767','5537','5570','5571','5572','5573','5574','5576','5555','5590','5500','5501','5502','5503','5504','5575','5360','5361','5362','5363','5364','5370','5372','5374','5376','5560','5561','5562','5563','5564','5520','5521','5522','5523','5524','5580','5377','5530','5540','5541','5542','5543','5544','5550','5300','5330','5332','5333','5334','5336','5310','5150','5070','5340','5640','5641','5644','5646','5000','5001','5002','5003','5004','5020','5021','5022','5024','5100','5101','5350','5351','5352','5353','5354','5170','5140','5060','5380','5190','5080','5081','5030','5031','5032','5630','5660','5680','5620','5600','5650','5651','5670'),
		'types' => array('gewestweg'),
	),
	// Provincies
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Antwerpen',
		'country' => 'BE',
		'postalcodes' => $postcodesProvincieAntwerpen,
		'types' => array('fietssnelweg', 'lange-afstandsfietspad'),
		'email' => array
		(
			'Steunpunt Fiets' => 'fietsen@provincieantwerpen.be',
			'Dienst Mobiliteit' => 'mobiliteit@provincieantwerpen.be',
		),
		'links' => array
		(
			'Twitter' => 'https://twitter.com/prov_antwerpen',
			'Website' => 'http://www.provincieantwerpen.be',
		),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Limburg',
		'country' => 'BE',
		'postalcodes' => $postcodesLimburg,
		'types' => array('fietssnelweg', 'lange-afstandsfietspad'),
		'links' => array
		(
			'Website' => 'http://limburg.be/fietsen',
			'Twitter' => 'https://twitter.com/LimburgBe',
		),
		'email' => array
		(
			'Mobiliteit' => 'mobiliteit@limburg.be'
		),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Oost-Vlaanderen',
		'country' => 'BE',
		'postalcodes' => $postcodesOostVlaanderen,
		'types' => array('fietssnelweg', 'lange-afstandsfietspad'),
		'email' => array
		(
			'Dienst Mobiliteit' => 'mobiliteit@oost-vlaanderen.be',
		),
		'links' => array
		(
			'Website' => 'http://oost-vlaanderen.be/public/wonen_milieu/mobiliteit/fietsen/',
			'Twitter' => 'https://twitter.com/oost_vlaanderen',
		),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Vlaams-Brabant',
		'country' => 'BE',
		'postalcodes' => $postcodesVlaamsBrabant,
		'types' => array('fietssnelweg', 'lange-afstandsfietspad'),
		'email' => array
		(
			'Dienst Mobiliteit' => 'fiets@vlaamsbrabant.be',
		),
		'links' => array
		(
			'Twitter' => 'https://twitter.com/vlaams_brabant',
			'Website' => 'http://www.vlaamsbrabant.be/verkeer-mobiliteit/fiets/',
		),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie West-Vlaanderen',
		'country' => 'BE',
		'postalcodes' => $postcodesWestVlaanderen,
		'types' => array('fietssnelweg', 'lange-afstandsfietspad'),
		'email' => array
		(
			'Dienst Mobiliteit' => 'mobiliteit@west-vlaanderen.be'
		),
		'links' => array
		(
			'Twitter' => 'https://twitter.com/provinciewvl',
			'Website' => 'http://www.west-vlaanderen.be/kwaliteit/Leefomgeving/mobiliteit/fietsroutes/',
		),
	),
	// Provincies Wallonië
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Waals-Brabant',
		'country' => 'BE',
		'postalcodes' => array('1320','1420','1421','1428','1440','1325','1490','1470','1471','1472','1473','1474','1476','1390','1315','1460','1461','1370','1310','1435','1400','1401','1402','1404','1360','1330','1331','1332','1480','1495','1410','1300','1301','1450','1357','1380','1350','1340','1341','1342','1348','1367','1430','1457'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Henegouwen',
		'country' => 'BE',
		'postalcodes' => array('7800','7801','7802','7803','7804','7810','7811','7812','7822','7823','7970','7971','7972','7973','7320','7321','7322','7940','7941','7942','7943','7950','7951','7890','7880','7910','7911','7912','7160','6000','6001','6010','6020','6030','6031','6032','6040','6041','6042','6043','6044','6060','6061','6200','6180','6181','6182','6183','6240','6220','6221','6222','6223','6224','6140','6141','6142','6280','7170','6110','6111','6230','6238','7180','7181','6250','6210','6211','7300','7301','7370','7080','7350','7050','7870','7000','7011','7012','7020','7021','7022','7024','7030','7031','7032','7033','7034','7390','7380','7382','7330','7331','7332','7333','7334','7340','7387','7040','7041','7700','7711','7712','7780','7781','7782','7783','7784','7090','7850','7100','7110','7860','7861','7862','7863','7864','7866','7070','7830','7060','7061','7062','7063','7190','7191','6150','6500','6511','7130','7131','7133','7134','6460','6461','6462','6463','6464','6560','6440','6441','6540','6542','6543','6567','6590','6591','6592','6593','6594','6596','6530','6531','6532','6533','6534','6536','7120','6120','7140','7141','6470','7640','7641','7642','7643','7760','7730','7740','7742','7743','7600','7601','7602','7603','7604','7608','7610','7611','7618','7500','7501','7502','7503','7504','7506','7520','7521','7522','7530','7531','7532','7533','7534','7536','7538','7540','7542','7543','7548','7620','7621','7622','7623','7624','7900','7901','7903','7904','7906','7750'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Luik',
		'country' => 'BE',
		'postalcodes' => array('4540','4210','4560','4190','4180','4181','4217','4218','4500','4570','4577','4550','4590','4537','4530','4520','4160','4161','4162','4163','4480','4557','4430','4431','4432','4340','4342','4920','4690','4610','4050','4051','4052','4053','4170','4171','4606','4607','4608','4130','4620','4621','4623','4624','4040','4041','4042','4450','4451','4452','4453','4458','4000','4020','4030','4031','4032','4680','4681','4682','4683','4684','4420','4100','4101','4102','4630','4631','4632','4633','4140','4141','4600','4601','4602','4460','4670','4671','4672','4400','4120','4121','4122','4870','4770','4771','4880','4837','4760','4761','4750','4820','4821','4700','4701','4650','4651','4652','4653','4654','4845','4720','4721','4728','4990','4830','4831','4834','4710','4711','4960','4877','4860','4861','4730','4731','4780','4782','4783','4784','4900','4970','4987','4910','4800','4801','4802','4950','4840','4841','4980','4983','4790','4791','4850','4851','4852','4890','4257','4260','4261','4263','4367','4357','4347','4250','4252','4253','4254','4280','4287','4360','4350','4351','4470','4300','4219','4317'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Luxemburg',
		'country' => 'BE',
		'postalcodes' => array('6700','6717','6790','6791','6792','6630','6780','6781','6782','6600','6686','6687','6688','6637','6660','6661','6662','6663','6666','6690','6692','6698','6640','6642','6670','6671','6672','6673','6674','6680','6681','6940','6941','6997','6990','6980','6982','6983','6984','6986','6900','6950','6951','6952','6953','6987','6970','6971','6972','6960','6880','6830','6831','6832','6833','6834','6836','6838','6929','6887','6860','6890','6840','6850','6851','6852','6853','6856','6870','6927','6920','6921','6922','6924','6800','6810','6811','6812','6813','6740','6741','6742','6743','6820','6821','6823','6824','6769','6750','6747','6730','6760','6761','6762','6720','6721','6723','6724','6767'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Provincie Namen',
		'country' => 'BE',
		'postalcodes' => array('5537','5570','5571','5572','5573','5574','5576','5555','5590','5500','5501','5502','5503','5504','5575','5360','5361','5362','5363','5364','5370','5372','5374','5376','5560','5561','5562','5563','5564','5520','5521','5522','5523','5524','5580','5377','5530','5540','5541','5542','5543','5544','5550','5300','5330','5332','5333','5334','5336','5310','5150','5070','5340','5640','5641','5644','5646','5000','5001','5002','5003','5004','5020','5021','5022','5024','5100','5101','5350','5351','5352','5353','5354','5170','5140','5060','5380','5190','5080','5081','5030','5031','5032','5630','5660','5680','5620','5600','5650','5651','5670'),
	),
	// Gemeentes
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aalst',
		'country' => 'BE',
		'postalcodes' => array('9300','9308','9310','9320'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aalter',
		'country' => 'BE',
		'postalcodes' => array('9880','9881'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aarlen',
		'country' => 'BE',
		'postalcodes' => array('6700'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aarschot',
		'country' => 'BE',
		'postalcodes' => array('3200','3201','3202'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aartselaar',
		'country' => 'BE',
		'postalcodes' => array('2630'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aat',
		'country' => 'BE',
		'postalcodes' => array('7800','7801','7802','7803','7804','7810','7811','7812','7822','7823'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Affligem',
		'country' => 'BE',
		'postalcodes' => array('1790'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aiseau-Presles',
		'country' => 'BE',
		'postalcodes' => array('6250'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Alken',
		'country' => 'BE',
		'postalcodes' => array('3570'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Alveringem',
		'country' => 'BE',
		'postalcodes' => array('8690','8691'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Amay',
		'country' => 'BE',
		'postalcodes' => array('4540'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Amel',
		'country' => 'BE',
		'postalcodes' => array('4770','4771'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Andenne',
		'country' => 'BE',
		'postalcodes' => array('5300'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Anderlecht',
		'country' => 'BE',
		'postalcodes' => array('1070'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Anderlues',
		'country' => 'BE',
		'postalcodes' => array('6150'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Anhée',
		'country' => 'BE',
		'postalcodes' => array('5537'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ans',
		'country' => 'BE',
		'postalcodes' => array('4430','4431','4432'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Anthisnes',
		'country' => 'BE',
		'postalcodes' => array('4160','4161','4162','4163'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Antoing',
		'country' => 'BE',
		'postalcodes' => array('7640','7641','7642','7643'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stad Antwerpen',
		'country' => 'BE',
		'postalcodes' => array('2000','2018','2020','2030','2040','2050','2060','2100','2140','2170','2180','2600','2610','2660'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Anzegem',
		'country' => 'BE',
		'postalcodes' => array('8570','8572','8573'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ardooie',
		'country' => 'BE',
		'postalcodes' => array('8850','8851'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Arendonk',
		'country' => 'BE',
		'postalcodes' => array('2370'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'As',
		'country' => 'BE',
		'postalcodes' => array('3665'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Asse',
		'country' => 'BE',
		'postalcodes' => array('1730','1731'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Assenede',
		'country' => 'BE',
		'postalcodes' => array('9960','9961','9968'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Assesse',
		'country' => 'BE',
		'postalcodes' => array('5330','5332','5333','5334','5336'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Attert',
		'country' => 'BE',
		'postalcodes' => array('6717'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aubange',
		'country' => 'BE',
		'postalcodes' => array('6790','6791','6792'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aubel',
		'country' => 'BE',
		'postalcodes' => array('4880'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Avelgem',
		'country' => 'BE',
		'postalcodes' => array('8580','8581','8582','8583'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Awans',
		'country' => 'BE',
		'postalcodes' => array('4340','4342'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Aywaille',
		'country' => 'BE',
		'postalcodes' => array('4920'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Baarle-Hertog',
		'country' => 'BE',
		'postalcodes' => array('2387'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Baelen',
		'country' => 'BE',
		'postalcodes' => array('4837'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Balen',
		'country' => 'BE',
		'postalcodes' => array('2490','2491'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bastenaken',
		'country' => 'BE',
		'postalcodes' => array('6600'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beaumont',
		'country' => 'BE',
		'postalcodes' => array('6500','6511'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beauraing',
		'country' => 'BE',
		'postalcodes' => array('5570','5571','5572','5573','5574','5576'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beernem',
		'country' => 'BE',
		'postalcodes' => array('8730'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beerse',
		'country' => 'BE',
		'postalcodes' => array('2340'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beersel',
		'country' => 'BE',
		'postalcodes' => array('1650','1651','1652','1653','1654'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Begijnendijk',
		'country' => 'BE',
		'postalcodes' => array('3130'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bekkevoort',
		'country' => 'BE',
		'postalcodes' => array('3460','3461'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beloeil',
		'country' => 'BE',
		'postalcodes' => array('7970','7971','7972','7973'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bergen',
		'country' => 'BE',
		'postalcodes' => array('7000','7011','7012','7020','7021','7022','7024','7030','7031','7032','7033','7034'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beringen',
		'country' => 'BE',
		'postalcodes' => array('3580','3581','3582','3583'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Berlaar',
		'country' => 'BE',
		'postalcodes' => array('2590'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Berlare',
		'country' => 'BE',
		'postalcodes' => array('9290'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Berloz',
		'country' => 'BE',
		'postalcodes' => array('4257'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bernissart',
		'country' => 'BE',
		'postalcodes' => array('7320','7321','7322'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bertem',
		'country' => 'BE',
		'postalcodes' => array('3060','3061'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bertogne',
		'country' => 'BE',
		'postalcodes' => array('6686','6687','6688'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bertrix',
		'country' => 'BE',
		'postalcodes' => array('6880'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bevekom',
		'country' => 'BE',
		'postalcodes' => array('1320'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bever',
		'country' => 'BE',
		'postalcodes' => array('1547'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beveren',
		'country' => 'BE',
		'postalcodes' => array('9120','9130'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Beyne-Heusay',
		'country' => 'BE',
		'postalcodes' => array('4610'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bierbeek',
		'country' => 'BE',
		'postalcodes' => array('3360'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bilzen',
		'country' => 'BE',
		'postalcodes' => array('3740','3742','3746'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Binche',
		'country' => 'BE',
		'postalcodes' => array('7130','7131','7133','7134'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bitsingen',
		'country' => 'BE',
		'postalcodes' => array('4690'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bièvre',
		'country' => 'BE',
		'postalcodes' => array('5555'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Blankenberge',
		'country' => 'BE',
		'postalcodes' => array('8370'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Blégny',
		'country' => 'BE',
		'postalcodes' => array('4670','4671','4672'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bocholt',
		'country' => 'BE',
		'postalcodes' => array('3950'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Boechout',
		'country' => 'BE',
		'postalcodes' => array('2530','2531'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bonheiden',
		'country' => 'BE',
		'postalcodes' => array('2820'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Boom',
		'country' => 'BE',
		'postalcodes' => array('2850'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Boortmeerbeek',
		'country' => 'BE',
		'postalcodes' => array('3190','3191'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Borgloon',
		'country' => 'BE',
		'postalcodes' => array('3840'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Borgworm',
		'country' => 'BE',
		'postalcodes' => array('4300'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bornem',
		'country' => 'BE',
		'postalcodes' => array('2880'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Borsbeek',
		'country' => 'BE',
		'postalcodes' => array('2150'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bouillon',
		'country' => 'BE',
		'postalcodes' => array('6830','6831','6832','6833','6834','6836','6838'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Boussu',
		'country' => 'BE',
		'postalcodes' => array('7300','7301'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Boutersem',
		'country' => 'BE',
		'postalcodes' => array('3370'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Braives',
		'country' => 'BE',
		'postalcodes' => array('4260','4261','4263'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Brakel',
		'country' => 'BE',
		'postalcodes' => array('9660','9661'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Brasschaat',
		'country' => 'BE',
		'postalcodes' => array('2930'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Brecht',
		'country' => 'BE',
		'postalcodes' => array('2960'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bredene',
		'country' => 'BE',
		'postalcodes' => array('8450'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bree',
		'country' => 'BE',
		'postalcodes' => array('3960'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Brugelette',
		'country' => 'BE',
		'postalcodes' => array('7940','7941','7942','7943'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stad Brugge',
		'country' => 'BE',
		'postalcodes' => array('8000','8200','8310','8380'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Brunehaut',
		'country' => 'BE',
		'postalcodes' => array('7620','7621','7622','7623','7624'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Brussel',
		'country' => 'BE',
		'postalcodes' => array('1000','1020','1120','1130'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Buggenhout',
		'country' => 'BE',
		'postalcodes' => array('9255'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Bullingen',
		'country' => 'BE',
		'postalcodes' => array('4760','4761'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Burdinne',
		'country' => 'BE',
		'postalcodes' => array('4210'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Burg-Reuland',
		'country' => 'BE',
		'postalcodes' => array('4790','4791'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Butgenbach',
		'country' => 'BE',
		'postalcodes' => array('4750'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Celles',
		'country' => 'BE',
		'postalcodes' => array('7760'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Cerfontaine',
		'country' => 'BE',
		'postalcodes' => array('5630'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Chapelle-Lez-Herlaimont',
		'country' => 'BE',
		'postalcodes' => array('7160'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Charleroi',
		'country' => 'BE',
		'postalcodes' => array('6000','6001','6010','6020','6030','6031','6032','6040','6041','6042','6043','6044','6060','6061'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Chastre',
		'country' => 'BE',
		'postalcodes' => array('1450'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Chatelet',
		'country' => 'BE',
		'postalcodes' => array('6200'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Chaudfontaine',
		'country' => 'BE',
		'postalcodes' => array('4050','4051','4052','4053'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Chaumont-Gistoux',
		'country' => 'BE',
		'postalcodes' => array('1325'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Chimay',
		'country' => 'BE',
		'postalcodes' => array('6460','6461','6462','6463','6464'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Chiny',
		'country' => 'BE',
		'postalcodes' => array('6810','6811','6812','6813'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Chièvres',
		'country' => 'BE',
		'postalcodes' => array('7950','7951'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ciney',
		'country' => 'BE',
		'postalcodes' => array('5590'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Clavier',
		'country' => 'BE',
		'postalcodes' => array('4560'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Colfontaine',
		'country' => 'BE',
		'postalcodes' => array('7340'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Comblain-Au-Pont',
		'country' => 'BE',
		'postalcodes' => array('4170','4171'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Courcelles',
		'country' => 'BE',
		'postalcodes' => array('6180','6181','6182','6183'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Court-Saint-Etienne',
		'country' => 'BE',
		'postalcodes' => array('1490'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Couvin',
		'country' => 'BE',
		'postalcodes' => array('5660'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Crisnée',
		'country' => 'BE',
		'postalcodes' => array('4367'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dalhem',
		'country' => 'BE',
		'postalcodes' => array('4606','4607','4608'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Damme',
		'country' => 'BE',
		'postalcodes' => array('8340'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Daverdisse',
		'country' => 'BE',
		'postalcodes' => array('6929'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'De Haan',
		'country' => 'BE',
		'postalcodes' => array('8420','8421'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'De Panne',
		'country' => 'BE',
		'postalcodes' => array('8660'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'De Pinte',
		'country' => 'BE',
		'postalcodes' => array('9840'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Deerlijk',
		'country' => 'BE',
		'postalcodes' => array('8540'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Deinze',
		'country' => 'BE',
		'postalcodes' => array('9800'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Denderleeuw',
		'country' => 'BE',
		'postalcodes' => array('9470','9472','9473'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dendermonde',
		'country' => 'BE',
		'postalcodes' => array('9200'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dentergem',
		'country' => 'BE',
		'postalcodes' => array('8720'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dessel',
		'country' => 'BE',
		'postalcodes' => array('2480'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Destelbergen',
		'country' => 'BE',
		'postalcodes' => array('9070'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Diepenbeek',
		'country' => 'BE',
		'postalcodes' => array('3590'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Diest',
		'country' => 'BE',
		'postalcodes' => array('3290','3293','3294'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Diksmuide',
		'country' => 'BE',
		'postalcodes' => array('8600'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dilbeek',
		'country' => 'BE',
		'postalcodes' => array('1700','1701','1702','1703'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dilsen',
		'country' => 'BE',
		'postalcodes' => array('3650'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dinant',
		'country' => 'BE',
		'postalcodes' => array('5500','5501','5502','5503','5504'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dison',
		'country' => 'BE',
		'postalcodes' => array('4820','4821'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Doische',
		'country' => 'BE',
		'postalcodes' => array('5680'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Donceel',
		'country' => 'BE',
		'postalcodes' => array('4357'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Doornik',
		'country' => 'BE',
		'postalcodes' => array('7500','7501','7502','7503','7504','7506','7520','7521','7522','7530','7531','7532','7533','7534','7536','7538','7540','7542','7543','7548'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Dour',
		'country' => 'BE',
		'postalcodes' => array('7370'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Drogenbos',
		'country' => 'BE',
		'postalcodes' => array('1620'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Duffel',
		'country' => 'BE',
		'postalcodes' => array('2570'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Durbuy',
		'country' => 'BE',
		'postalcodes' => array('6940','6941'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ecaussinnes',
		'country' => 'BE',
		'postalcodes' => array('7190','7191'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Edegem',
		'country' => 'BE',
		'postalcodes' => array('2650'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Edingen',
		'country' => 'BE',
		'postalcodes' => array('7850'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Eeklo',
		'country' => 'BE',
		'postalcodes' => array('9900'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Eghezée',
		'country' => 'BE',
		'postalcodes' => array('5310'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Eigenbrakel',
		'country' => 'BE',
		'postalcodes' => array('1420','1421','1428'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Elsene',
		'country' => 'BE',
		'postalcodes' => array('1050'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Elzele',
		'country' => 'BE',
		'postalcodes' => array('7890'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Engis',
		'country' => 'BE',
		'postalcodes' => array('4480'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Erezée',
		'country' => 'BE',
		'postalcodes' => array('6997'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Erpe-Mere',
		'country' => 'BE',
		'postalcodes' => array('9420'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Erquelinnes',
		'country' => 'BE',
		'postalcodes' => array('6560'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Esneux',
		'country' => 'BE',
		'postalcodes' => array('4130'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Essen',
		'country' => 'BE',
		'postalcodes' => array('2910'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Estaimpuis',
		'country' => 'BE',
		'postalcodes' => array('7730'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Estinnes',
		'country' => 'BE',
		'postalcodes' => array('7120'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Etalle',
		'country' => 'BE',
		'postalcodes' => array('6740','6741','6742','6743'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Etterbeek',
		'country' => 'BE',
		'postalcodes' => array('1040'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Eupen',
		'country' => 'BE',
		'postalcodes' => array('4700','4701'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Evere',
		'country' => 'BE',
		'postalcodes' => array('1140'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Evergem',
		'country' => 'BE',
		'postalcodes' => array('9940'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Faimes',
		'country' => 'BE',
		'postalcodes' => array('4317'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Farciennes',
		'country' => 'BE',
		'postalcodes' => array('6240'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Fauvillers',
		'country' => 'BE',
		'postalcodes' => array('6637'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Fernelmont',
		'country' => 'BE',
		'postalcodes' => array('5380'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ferrières',
		'country' => 'BE',
		'postalcodes' => array('4190'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Fexhe-Le-Haut-Clocher',
		'country' => 'BE',
		'postalcodes' => array('4347'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Fleurus',
		'country' => 'BE',
		'postalcodes' => array('6220','6221','6222','6223','6224'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Floreffe',
		'country' => 'BE',
		'postalcodes' => array('5150'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Florennes',
		'country' => 'BE',
		'postalcodes' => array('5620'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Florenville',
		'country' => 'BE',
		'postalcodes' => array('6820','6821','6823','6824'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Flémalle',
		'country' => 'BE',
		'postalcodes' => array('4400'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Fléron',
		'country' => 'BE',
		'postalcodes' => array('4620','4621','4623','4624'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Fontaine-Leveque',
		'country' => 'BE',
		'postalcodes' => array('6140','6141','6142'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Fosses-La-Ville',
		'country' => 'BE',
		'postalcodes' => array('5070'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Frameries',
		'country' => 'BE',
		'postalcodes' => array('7080'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Frasnes-Lez-Anvaing',
		'country' => 'BE',
		'postalcodes' => array('7910','7911','7912'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Froidchapelle',
		'country' => 'BE',
		'postalcodes' => array('6440','6441'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Galmaarden',
		'country' => 'BE',
		'postalcodes' => array('1570'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ganshoren',
		'country' => 'BE',
		'postalcodes' => array('1083'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gavere',
		'country' => 'BE',
		'postalcodes' => array('9890'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gedinne',
		'country' => 'BE',
		'postalcodes' => array('5575'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Geel',
		'country' => 'BE',
		'postalcodes' => array('2440'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Geer',
		'country' => 'BE',
		'postalcodes' => array('4250','4252','4253','4254'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Geetbets',
		'country' => 'BE',
		'postalcodes' => array('3450','3454'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Geldenaken',
		'country' => 'BE',
		'postalcodes' => array('1370'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gembloux',
		'country' => 'BE',
		'postalcodes' => array('5030','5031','5032'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Genepiën',
		'country' => 'BE',
		'postalcodes' => array('1470','1471','1472','1473','1474','1476'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Genk',
		'country' => 'BE',
		'postalcodes' => array('3600'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stad Gent',
		'country' => 'BE',
		'postalcodes' => array('9000','9030','9031','9032','9040','9041','9042','9050','9051','9052'),
		'links' => array
		(
			'Twitter' => 'https://twitter.com/stadgent',
			'Contactformulier' => 'https://eforms.gent.be/Productie4.0/formulier/scContactFormulierGentInfo.aspx/fCGIVraag'
		),
		'email' => array
		(
			'GentInfo' => 'gentinfo@gent.be'
		)
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Geraardsbergen',
		'country' => 'BE',
		'postalcodes' => array('9500','9506'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gerpinnes',
		'country' => 'BE',
		'postalcodes' => array('6280'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gesves',
		'country' => 'BE',
		'postalcodes' => array('5340'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gingelom',
		'country' => 'BE',
		'postalcodes' => array('3890','3891'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gistel',
		'country' => 'BE',
		'postalcodes' => array('8470'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Glabbeek',
		'country' => 'BE',
		'postalcodes' => array('3380','3381','3384'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gooik',
		'country' => 'BE',
		'postalcodes' => array('1755'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gouvy',
		'country' => 'BE',
		'postalcodes' => array('6670','6671','6672','6673','6674'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Grace-Hollogne',
		'country' => 'BE',
		'postalcodes' => array('4460'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Graven',
		'country' => 'BE',
		'postalcodes' => array('1390'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Grimbergen',
		'country' => 'BE',
		'postalcodes' => array('1850','1851','1852','1853'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Grobbendonk',
		'country' => 'BE',
		'postalcodes' => array('2280','2288'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Haacht',
		'country' => 'BE',
		'postalcodes' => array('3150'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Haaltert',
		'country' => 'BE',
		'postalcodes' => array('9450','9451'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Habay',
		'country' => 'BE',
		'postalcodes' => array('6720','6721','6723','6724'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Halen',
		'country' => 'BE',
		'postalcodes' => array('3545'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Halle',
		'country' => 'BE',
		'postalcodes' => array('1500','1501','1502'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ham',
		'country' => 'BE',
		'postalcodes' => array('3945'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ham-Sur-Heure-Nalinnes',
		'country' => 'BE',
		'postalcodes' => array('6120'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hamme',
		'country' => 'BE',
		'postalcodes' => array('9220'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hamoir',
		'country' => 'BE',
		'postalcodes' => array('4180','4181'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hamois',
		'country' => 'BE',
		'postalcodes' => array('5360','5361','5362','5363','5364'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hamont-Achel',
		'country' => 'BE',
		'postalcodes' => array('3930'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hannuit',
		'country' => 'BE',
		'postalcodes' => array('4280'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Harelbeke',
		'country' => 'BE',
		'postalcodes' => array('8530','8531'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hasselt',
		'country' => 'BE',
		'postalcodes' => array('3500','3501','3510','3511','3512'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hastière',
		'country' => 'BE',
		'postalcodes' => array('5540','5541','5542','5543','5544'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Havelange',
		'country' => 'BE',
		'postalcodes' => array('5370','5372','5374','5376'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hechtel-Eksel',
		'country' => 'BE',
		'postalcodes' => array('3940','3941'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Heers',
		'country' => 'BE',
		'postalcodes' => array('3870'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Heist-Op-Den-Berg',
		'country' => 'BE',
		'postalcodes' => array('2220','2221','2222','2223'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hemiksem',
		'country' => 'BE',
		'postalcodes' => array('2620'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hensies',
		'country' => 'BE',
		'postalcodes' => array('7350'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herbeumont',
		'country' => 'BE',
		'postalcodes' => array('6887'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herent',
		'country' => 'BE',
		'postalcodes' => array('3020'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herentals',
		'country' => 'BE',
		'postalcodes' => array('2200'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herenthout',
		'country' => 'BE',
		'postalcodes' => array('2270'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herk-De-Stad',
		'country' => 'BE',
		'postalcodes' => array('3540'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herne',
		'country' => 'BE',
		'postalcodes' => array('1540','1541'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herselt',
		'country' => 'BE',
		'postalcodes' => array('2230'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herstal',
		'country' => 'BE',
		'postalcodes' => array('4040','4041','4042'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herstappe',
		'country' => 'BE',
		'postalcodes' => array('3717'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herve',
		'country' => 'BE',
		'postalcodes' => array('4650','4651','4652','4653','4654'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Herzele',
		'country' => 'BE',
		'postalcodes' => array('9550','9551','9552'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Heusden-Zolder',
		'country' => 'BE',
		'postalcodes' => array('3550'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Heuvelland',
		'country' => 'BE',
		'postalcodes' => array('8950','8951','8952','8953','8954','8956','8958'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hoegaarden',
		'country' => 'BE',
		'postalcodes' => array('3320','3321'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hoei',
		'country' => 'BE',
		'postalcodes' => array('4500'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hoeilaart',
		'country' => 'BE',
		'postalcodes' => array('1560'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hoeselt',
		'country' => 'BE',
		'postalcodes' => array('3730','3732'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Holsbeek',
		'country' => 'BE',
		'postalcodes' => array('3220','3221'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Honnelles',
		'country' => 'BE',
		'postalcodes' => array('7387'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hooglede',
		'country' => 'BE',
		'postalcodes' => array('8830'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hoogstraten',
		'country' => 'BE',
		'postalcodes' => array('2320','2321','2322','2323','2328'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Horebeke',
		'country' => 'BE',
		'postalcodes' => array('9667'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hotton',
		'country' => 'BE',
		'postalcodes' => array('6990'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Houffalize',
		'country' => 'BE',
		'postalcodes' => array('6660','6661','6662','6663','6666'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Houthalen-Helchteren',
		'country' => 'BE',
		'postalcodes' => array('3530'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Houthulst',
		'country' => 'BE',
		'postalcodes' => array('8650'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Houyet',
		'country' => 'BE',
		'postalcodes' => array('5560','5561','5562','5563','5564'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hove',
		'country' => 'BE',
		'postalcodes' => array('2540'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Huldenberg',
		'country' => 'BE',
		'postalcodes' => array('3040'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hulshout',
		'country' => 'BE',
		'postalcodes' => array('2235'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Hélécine',
		'country' => 'BE',
		'postalcodes' => array('1357'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Héron',
		'country' => 'BE',
		'postalcodes' => array('4217','4218'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ichtegem',
		'country' => 'BE',
		'postalcodes' => array('8480'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stad Ieper',
		'country' => 'BE',
		'postalcodes' => array('8900','8902','8904','8906','8908'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Incourt',
		'country' => 'BE',
		'postalcodes' => array('1315'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ingelmunster',
		'country' => 'BE',
		'postalcodes' => array('8770'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Itter',
		'country' => 'BE',
		'postalcodes' => array('1460','1461'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Izegem',
		'country' => 'BE',
		'postalcodes' => array('8870'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Jabbeke',
		'country' => 'BE',
		'postalcodes' => array('8490'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Jalhay',
		'country' => 'BE',
		'postalcodes' => array('4845'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Jemeppe-Sur-Sambre',
		'country' => 'BE',
		'postalcodes' => array('5190'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Jette',
		'country' => 'BE',
		'postalcodes' => array('1090'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Juprelle',
		'country' => 'BE',
		'postalcodes' => array('4450','4451','4452','4453','4458'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Jurbeke',
		'country' => 'BE',
		'postalcodes' => array('7050'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kalmthout',
		'country' => 'BE',
		'postalcodes' => array('2920'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kampenhout',
		'country' => 'BE',
		'postalcodes' => array('1910'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kapelle-Op-Den-Bos',
		'country' => 'BE',
		'postalcodes' => array('1880'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kapellen',
		'country' => 'BE',
		'postalcodes' => array('2950'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kaprijke',
		'country' => 'BE',
		'postalcodes' => array('9970','9971'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kasteelbrakel',
		'country' => 'BE',
		'postalcodes' => array('1440'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kasterlee',
		'country' => 'BE',
		'postalcodes' => array('2460'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Keerbergen',
		'country' => 'BE',
		'postalcodes' => array('3140'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kelmis',
		'country' => 'BE',
		'postalcodes' => array('4720','4721','4728'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kinrooi',
		'country' => 'BE',
		'postalcodes' => array('3640'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kluisbergen',
		'country' => 'BE',
		'postalcodes' => array('9690'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Knesselare',
		'country' => 'BE',
		'postalcodes' => array('9910'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Knokke-Heist',
		'country' => 'BE',
		'postalcodes' => array('8300','8301'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Koekelare',
		'country' => 'BE',
		'postalcodes' => array('8680'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Koekelberg',
		'country' => 'BE',
		'postalcodes' => array('1081'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Koksijde',
		'country' => 'BE',
		'postalcodes' => array('8670'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Komen',
		'country' => 'BE',
		'postalcodes' => array('7780','7781','7782','7783','7784'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kontich',
		'country' => 'BE',
		'postalcodes' => array('2550'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kortemark',
		'country' => 'BE',
		'postalcodes' => array('8610'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kortenaken',
		'country' => 'BE',
		'postalcodes' => array('3470','3471','3472','3473'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kortenberg',
		'country' => 'BE',
		'postalcodes' => array('3070','3071','3078'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kortessem',
		'country' => 'BE',
		'postalcodes' => array('3720','3721','3722','3723','3724'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stad Kortrijk',
		'country' => 'BE',
		'postalcodes' => array('8500','8501','8510','8511'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kraainem',
		'country' => 'BE',
		'postalcodes' => array('1950'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kruibeke',
		'country' => 'BE',
		'postalcodes' => array('9150'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kruishoutem',
		'country' => 'BE',
		'postalcodes' => array('9770','9771','9772'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Kuurne',
		'country' => 'BE',
		'postalcodes' => array('8520'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'La Bruyère',
		'country' => 'BE',
		'postalcodes' => array('5080','5081'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'La Louvière',
		'country' => 'BE',
		'postalcodes' => array('7100','7110'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'La Roche-En-Ardenne',
		'country' => 'BE',
		'postalcodes' => array('6980','6982','6983','6984','6986'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Laakdal',
		'country' => 'BE',
		'postalcodes' => array('2430','2431'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Laarne',
		'country' => 'BE',
		'postalcodes' => array('9270'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lanaken',
		'country' => 'BE',
		'postalcodes' => array('3620','3621'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Landen',
		'country' => 'BE',
		'postalcodes' => array('3400','3401','3404'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Langemark-Poelkapelle',
		'country' => 'BE',
		'postalcodes' => array('8920'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lasne',
		'country' => 'BE',
		'postalcodes' => array('1380'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Le Roeulx',
		'country' => 'BE',
		'postalcodes' => array('7070'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lebbeke',
		'country' => 'BE',
		'postalcodes' => array('9280'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lede',
		'country' => 'BE',
		'postalcodes' => array('9340'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ledegem',
		'country' => 'BE',
		'postalcodes' => array('8880'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lendelede',
		'country' => 'BE',
		'postalcodes' => array('8860'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lennik',
		'country' => 'BE',
		'postalcodes' => array('1750'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lens',
		'country' => 'BE',
		'postalcodes' => array('7870'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Leopoldsburg',
		'country' => 'BE',
		'postalcodes' => array('3970','3971'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Les Bons Villers',
		'country' => 'BE',
		'postalcodes' => array('6210','6211'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lessen',
		'country' => 'BE',
		'postalcodes' => array('7860','7861','7862','7863','7864','7866'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Leuven',
		'country' => 'BE',
		'postalcodes' => array('3000','3001','3010','3012','3018'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Leuze-En-Hainaut',
		'country' => 'BE',
		'postalcodes' => array('7900','7901','7903','7904','7906'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Libin',
		'country' => 'BE',
		'postalcodes' => array('6890'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Libramont-Chevigny',
		'country' => 'BE',
		'postalcodes' => array('6800'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lichtervelde',
		'country' => 'BE',
		'postalcodes' => array('8810'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Liedekerke',
		'country' => 'BE',
		'postalcodes' => array('1770'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lier',
		'country' => 'BE',
		'postalcodes' => array('2500'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lierde',
		'country' => 'BE',
		'postalcodes' => array('9570','9571','9572'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lierneux',
		'country' => 'BE',
		'postalcodes' => array('4990'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lijsem',
		'country' => 'BE',
		'postalcodes' => array('4287'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lille',
		'country' => 'BE',
		'postalcodes' => array('2275'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Limburg',
		'country' => 'BE',
		'postalcodes' => array('4830','4831','4834'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Linkebeek',
		'country' => 'BE',
		'postalcodes' => array('1630'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lint',
		'country' => 'BE',
		'postalcodes' => array('2547'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Linter',
		'country' => 'BE',
		'postalcodes' => array('3350'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lo-Reninge',
		'country' => 'BE',
		'postalcodes' => array('8647'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lobbes',
		'country' => 'BE',
		'postalcodes' => array('6540','6542','6543'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lochristi',
		'country' => 'BE',
		'postalcodes' => array('9080'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lokeren',
		'country' => 'BE',
		'postalcodes' => array('9160'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lommel',
		'country' => 'BE',
		'postalcodes' => array('3920'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Londerzeel',
		'country' => 'BE',
		'postalcodes' => array('1840'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lontzen',
		'country' => 'BE',
		'postalcodes' => array('4710','4711'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lovendegem',
		'country' => 'BE',
		'postalcodes' => array('9920','9921'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lubbeek',
		'country' => 'BE',
		'postalcodes' => array('3210','3211','3212'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Luik',
		'country' => 'BE',
		'postalcodes' => array('4000','4020','4030','4031','4032'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Lummen',
		'country' => 'BE',
		'postalcodes' => array('3560'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Léglise',
		'country' => 'BE',
		'postalcodes' => array('6860'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Maarkedal',
		'country' => 'BE',
		'postalcodes' => array('9680','9681','9688'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Maaseik',
		'country' => 'BE',
		'postalcodes' => array('3680'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Maasmechelen',
		'country' => 'BE',
		'postalcodes' => array('3630','3631'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Machelen',
		'country' => 'BE',
		'postalcodes' => array('1830','1831'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Maldegem',
		'country' => 'BE',
		'postalcodes' => array('9990','9991','9992'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Malle',
		'country' => 'BE',
		'postalcodes' => array('2390'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Malmedy',
		'country' => 'BE',
		'postalcodes' => array('4960'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Manage',
		'country' => 'BE',
		'postalcodes' => array('7170'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Manhay',
		'country' => 'BE',
		'postalcodes' => array('6960'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Marche-En-Famenne',
		'country' => 'BE',
		'postalcodes' => array('6900'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Marchin',
		'country' => 'BE',
		'postalcodes' => array('4570'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Martelange',
		'country' => 'BE',
		'postalcodes' => array('6630'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stad Mechelen',
		'country' => 'BE',
		'postalcodes' => array('2800','2801','2811','2812'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Meerhout',
		'country' => 'BE',
		'postalcodes' => array('2450'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Meeuwen-Gruitrode',
		'country' => 'BE',
		'postalcodes' => array('3670'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Meise',
		'country' => 'BE',
		'postalcodes' => array('1860','1861'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Meix-Devant-Virton',
		'country' => 'BE',
		'postalcodes' => array('6769'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Melle',
		'country' => 'BE',
		'postalcodes' => array('9090'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Menen',
		'country' => 'BE',
		'postalcodes' => array('8930'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Merbes-Le-Chateau',
		'country' => 'BE',
		'postalcodes' => array('6567'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Merchtem',
		'country' => 'BE',
		'postalcodes' => array('1785'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Merelbeke',
		'country' => 'BE',
		'postalcodes' => array('9820'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Merksplas',
		'country' => 'BE',
		'postalcodes' => array('2330'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Mesen',
		'country' => 'BE',
		'postalcodes' => array('8957'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Messancy',
		'country' => 'BE',
		'postalcodes' => array('6780','6781','6782'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Mettet',
		'country' => 'BE',
		'postalcodes' => array('5640','5641','5644','5646'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Meulebeke',
		'country' => 'BE',
		'postalcodes' => array('8760'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Middelkerke',
		'country' => 'BE',
		'postalcodes' => array('8430','8431','8432','8433','8434'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Modave',
		'country' => 'BE',
		'postalcodes' => array('4577'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Moerbeke-Waas',
		'country' => 'BE',
		'postalcodes' => array('9180'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Moeskroen',
		'country' => 'BE',
		'postalcodes' => array('7700','7711','7712'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Mol',
		'country' => 'BE',
		'postalcodes' => array('2400'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Momignies',
		'country' => 'BE',
		'postalcodes' => array('6590','6591','6592','6593','6594','6596'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Mont-De-Lenclus',
		'country' => 'BE',
		'postalcodes' => array('7750'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Mont-Saint-Guibert',
		'country' => 'BE',
		'postalcodes' => array('1435'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Montigny-Le-Tilleul',
		'country' => 'BE',
		'postalcodes' => array('6110','6111'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Moorslede',
		'country' => 'BE',
		'postalcodes' => array('8890'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Morlanwelz',
		'country' => 'BE',
		'postalcodes' => array('7140','7141'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Mortsel',
		'country' => 'BE',
		'postalcodes' => array('2640'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Musson',
		'country' => 'BE',
		'postalcodes' => array('6750'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Namen',
		'country' => 'BE',
		'postalcodes' => array('5000','5001','5002','5003','5004','5020','5021','5022','5024','5100','5101'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Nandrin',
		'country' => 'BE',
		'postalcodes' => array('4550'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Nassogne',
		'country' => 'BE',
		'postalcodes' => array('6950','6951','6952','6953'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Nazareth',
		'country' => 'BE',
		'postalcodes' => array('9810'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Neerpelt',
		'country' => 'BE',
		'postalcodes' => array('3910'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Neufchateau',
		'country' => 'BE',
		'postalcodes' => array('6840'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Neupré',
		'country' => 'BE',
		'postalcodes' => array('4120','4121','4122'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Nevele',
		'country' => 'BE',
		'postalcodes' => array('9850'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Niel',
		'country' => 'BE',
		'postalcodes' => array('2845'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Nieuwerkerken',
		'country' => 'BE',
		'postalcodes' => array('3850'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Nieuwpoort',
		'country' => 'BE',
		'postalcodes' => array('8620'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Nijlen',
		'country' => 'BE',
		'postalcodes' => array('2560'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Nijvel',
		'country' => 'BE',
		'postalcodes' => array('1400','1401','1402','1404'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ninove',
		'country' => 'BE',
		'postalcodes' => array('9400','9401','9402','9403','9404','9406'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oerle',
		'country' => 'BE',
		'postalcodes' => array('4360'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ohey',
		'country' => 'BE',
		'postalcodes' => array('5350','5351','5352','5353','5354'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Olen',
		'country' => 'BE',
		'postalcodes' => array('2250'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Olne',
		'country' => 'BE',
		'postalcodes' => array('4877'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Onhaye',
		'country' => 'BE',
		'postalcodes' => array('5520','5521','5522','5523','5524'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oostende',
		'country' => 'BE',
		'postalcodes' => array('8400'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Gemeente Oosterzele',
		'country' => 'BE',
		'postalcodes' => array('9860'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oostkamp',
		'country' => 'BE',
		'postalcodes' => array('8020'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oostrozebeke',
		'country' => 'BE',
		'postalcodes' => array('8780'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Opglabbeek',
		'country' => 'BE',
		'postalcodes' => array('3660'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Opwijk',
		'country' => 'BE',
		'postalcodes' => array('1745'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Opzullik',
		'country' => 'BE',
		'postalcodes' => array('7830'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Orp-Jauche',
		'country' => 'BE',
		'postalcodes' => array('1350'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ottignies-Louvain-La-Neuve',
		'country' => 'BE',
		'postalcodes' => array('1340','1341','1342','1348'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oud-Heverlee',
		'country' => 'BE',
		'postalcodes' => array('3050','3051','3052','3053','3054'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oud-Turnhout',
		'country' => 'BE',
		'postalcodes' => array('2360'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oudenaarde',
		'country' => 'BE',
		'postalcodes' => array('9700'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oudenburg',
		'country' => 'BE',
		'postalcodes' => array('8460'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oudergem',
		'country' => 'BE',
		'postalcodes' => array('1160'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ouffet',
		'country' => 'BE',
		'postalcodes' => array('4590'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Oupeye',
		'country' => 'BE',
		'postalcodes' => array('4680','4681','4682','4683','4684'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Overijse',
		'country' => 'BE',
		'postalcodes' => array('3090'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Overpelt',
		'country' => 'BE',
		'postalcodes' => array('3900'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Paliseul',
		'country' => 'BE',
		'postalcodes' => array('6850','6851','6852','6853','6856'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Pecq',
		'country' => 'BE',
		'postalcodes' => array('7740','7742','7743'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Peer',
		'country' => 'BE',
		'postalcodes' => array('3990'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Pepingen',
		'country' => 'BE',
		'postalcodes' => array('1670','1671','1673','1674'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Pepinster',
		'country' => 'BE',
		'postalcodes' => array('4860','4861'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Perwijs',
		'country' => 'BE',
		'postalcodes' => array('1360'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Philippeville',
		'country' => 'BE',
		'postalcodes' => array('5600'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Pittem',
		'country' => 'BE',
		'postalcodes' => array('8740'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Plombières',
		'country' => 'BE',
		'postalcodes' => array('4850','4851','4852'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Pont-A-Celles',
		'country' => 'BE',
		'postalcodes' => array('6230','6238'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Poperinge',
		'country' => 'BE',
		'postalcodes' => array('8970','8972','8978'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Profondeville',
		'country' => 'BE',
		'postalcodes' => array('5170'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Putte',
		'country' => 'BE',
		'postalcodes' => array('2580'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Puurs',
		'country' => 'BE',
		'postalcodes' => array('2870'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Péruwelz',
		'country' => 'BE',
		'postalcodes' => array('7600','7601','7602','7603','7604','7608'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Quaregnon',
		'country' => 'BE',
		'postalcodes' => array('7390'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Quiévrain',
		'country' => 'BE',
		'postalcodes' => array('7380','7382'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Quévy',
		'country' => 'BE',
		'postalcodes' => array('7040','7041'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Raeren',
		'country' => 'BE',
		'postalcodes' => array('4730','4731'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ramillies',
		'country' => 'BE',
		'postalcodes' => array('1367'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ranst',
		'country' => 'BE',
		'postalcodes' => array('2520'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ravels',
		'country' => 'BE',
		'postalcodes' => array('2380','2381','2382'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rebecq',
		'country' => 'BE',
		'postalcodes' => array('1430'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Remicourt',
		'country' => 'BE',
		'postalcodes' => array('4350','4351'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rendeux',
		'country' => 'BE',
		'postalcodes' => array('6987'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Retie',
		'country' => 'BE',
		'postalcodes' => array('2470'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Riemst',
		'country' => 'BE',
		'postalcodes' => array('3770'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rijkevorsel',
		'country' => 'BE',
		'postalcodes' => array('2310'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rixensart',
		'country' => 'BE',
		'postalcodes' => array('1330','1331','1332'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rochefort',
		'country' => 'BE',
		'postalcodes' => array('5580'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Roeselare',
		'country' => 'BE',
		'postalcodes' => array('8800'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ronse',
		'country' => 'BE',
		'postalcodes' => array('9600'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Roosdaal',
		'country' => 'BE',
		'postalcodes' => array('1760','1761'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rotselaar',
		'country' => 'BE',
		'postalcodes' => array('3110','3111','3118'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rouvroy',
		'country' => 'BE',
		'postalcodes' => array('6767'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ruiselede',
		'country' => 'BE',
		'postalcodes' => array('8755'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rumes',
		'country' => 'BE',
		'postalcodes' => array('7610','7611','7618'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Rumst',
		'country' => 'BE',
		'postalcodes' => array('2840'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Saint-Georges-Sur-Meuse',
		'country' => 'BE',
		'postalcodes' => array('4470'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Saint-Ghislain',
		'country' => 'BE',
		'postalcodes' => array('7330','7331','7332','7333','7334'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Saint-Hubert',
		'country' => 'BE',
		'postalcodes' => array('6870'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Saint-Léger',
		'country' => 'BE',
		'postalcodes' => array('6747'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sainte-Ode',
		'country' => 'BE',
		'postalcodes' => array('6680','6681'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sambreville',
		'country' => 'BE',
		'postalcodes' => array('5060'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sankt-Vith',
		'country' => 'BE',
		'postalcodes' => array('4780','4782','4783','4784'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Schaarbeek',
		'country' => 'BE',
		'postalcodes' => array('1030'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Schelle',
		'country' => 'BE',
		'postalcodes' => array('2627'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Scherpenheuvel-Zichem',
		'country' => 'BE',
		'postalcodes' => array('3270','3271','3272'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Schilde',
		'country' => 'BE',
		'postalcodes' => array('2970'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Schoten',
		'country' => 'BE',
		'postalcodes' => array('2900'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Seneffe',
		'country' => 'BE',
		'postalcodes' => array('7180','7181'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Seraing',
		'country' => 'BE',
		'postalcodes' => array('4100','4101','4102'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sgravenbrakel',
		'country' => 'BE',
		'postalcodes' => array('7090'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Agatha-Berchem',
		'country' => 'BE',
		'postalcodes' => array('1082'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Amands',
		'country' => 'BE',
		'postalcodes' => array('2890'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Genesius-Rode',
		'country' => 'BE',
		'postalcodes' => array('1640'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Gillis',
		'country' => 'BE',
		'postalcodes' => array('1060'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Gillis-Waas',
		'country' => 'BE',
		'postalcodes' => array('9170'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Jans-Molenbeek',
		'country' => 'BE',
		'postalcodes' => array('1080'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Joost-Ten-Node',
		'country' => 'BE',
		'postalcodes' => array('1210'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Katelijne-Waver',
		'country' => 'BE',
		'postalcodes' => array('2860','2861'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Lambrechts-Woluwe',
		'country' => 'BE',
		'postalcodes' => array('1200'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Laureins',
		'country' => 'BE',
		'postalcodes' => array('9980','9981','9982','9988'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Lievens-Houtem',
		'country' => 'BE',
		'postalcodes' => array('9520','9521'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Martens-Latem',
		'country' => 'BE',
		'postalcodes' => array('9830','9831'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Niklaas (Prov. Luik)',
		'country' => 'BE',
		'postalcodes' => array('4420'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Niklaas (Prov. Oost-Vlaanderen)',
		'country' => 'BE',
		'postalcodes' => array('9100','9111','9112'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Pieters-Leeuw',
		'country' => 'BE',
		'postalcodes' => array('1600','1601','1602'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Pieters-Woluwe',
		'country' => 'BE',
		'postalcodes' => array('1150'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sint-Truiden',
		'country' => 'BE',
		'postalcodes' => array('3800','3803','3806'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sivry-Rance',
		'country' => 'BE',
		'postalcodes' => array('6470'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sombreffe',
		'country' => 'BE',
		'postalcodes' => array('5140'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Somme-Leuze',
		'country' => 'BE',
		'postalcodes' => array('5377'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Soumagne',
		'country' => 'BE',
		'postalcodes' => array('4630','4631','4632','4633'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Spa',
		'country' => 'BE',
		'postalcodes' => array('4900'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Spiere-Helkijn',
		'country' => 'BE',
		'postalcodes' => array('8587'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Sprimont',
		'country' => 'BE',
		'postalcodes' => array('4140','4141'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stabroek',
		'country' => 'BE',
		'postalcodes' => array('2940'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Staden',
		'country' => 'BE',
		'postalcodes' => array('8840'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stavelot',
		'country' => 'BE',
		'postalcodes' => array('4970'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Steenokkerzeel',
		'country' => 'BE',
		'postalcodes' => array('1820'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stekene',
		'country' => 'BE',
		'postalcodes' => array('9190'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Stoumont',
		'country' => 'BE',
		'postalcodes' => array('4987'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tellin',
		'country' => 'BE',
		'postalcodes' => array('6927'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Temse',
		'country' => 'BE',
		'postalcodes' => array('9140'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tenneville',
		'country' => 'BE',
		'postalcodes' => array('6970','6971','6972'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Terhulpen',
		'country' => 'BE',
		'postalcodes' => array('1310'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ternat',
		'country' => 'BE',
		'postalcodes' => array('1740','1741','1742'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tervuren',
		'country' => 'BE',
		'postalcodes' => array('3080'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tessenderlo',
		'country' => 'BE',
		'postalcodes' => array('3980'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Theux',
		'country' => 'BE',
		'postalcodes' => array('4910'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Thimister-Clermont',
		'country' => 'BE',
		'postalcodes' => array('4890'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Thuin',
		'country' => 'BE',
		'postalcodes' => array('6530','6531','6532','6533','6534','6536'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tielt',
		'country' => 'BE',
		'postalcodes' => array('8700'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tielt-Winge',
		'country' => 'BE',
		'postalcodes' => array('3390','3391'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tienen',
		'country' => 'BE',
		'postalcodes' => array('3300'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tinlot',
		'country' => 'BE',
		'postalcodes' => array('4557'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tintigny',
		'country' => 'BE',
		'postalcodes' => array('6730'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tongeren',
		'country' => 'BE',
		'postalcodes' => array('3700'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Torhout',
		'country' => 'BE',
		'postalcodes' => array('8820'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tremelo',
		'country' => 'BE',
		'postalcodes' => array('3120','3128'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Trois-Ponts',
		'country' => 'BE',
		'postalcodes' => array('4980','4983'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Trooz',
		'country' => 'BE',
		'postalcodes' => array('4870'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Tubeke',
		'country' => 'BE',
		'postalcodes' => array('1480'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Turnhout',
		'country' => 'BE',
		'postalcodes' => array('2300'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Ukkel',
		'country' => 'BE',
		'postalcodes' => array('1180'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vaux-Sur-Sure',
		'country' => 'BE',
		'postalcodes' => array('6640','6642'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Verlaine',
		'country' => 'BE',
		'postalcodes' => array('4537'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Verviers',
		'country' => 'BE',
		'postalcodes' => array('4800','4801','4802'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Veurne',
		'country' => 'BE',
		'postalcodes' => array('8630'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vielsalm',
		'country' => 'BE',
		'postalcodes' => array('6690','6692','6698'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Villers-La-Ville',
		'country' => 'BE',
		'postalcodes' => array('1495'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Villers-Le-Bouillet',
		'country' => 'BE',
		'postalcodes' => array('4530'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vilvoorde',
		'country' => 'BE',
		'postalcodes' => array('1800'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Viroinval',
		'country' => 'BE',
		'postalcodes' => array('5670'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Virton',
		'country' => 'BE',
		'postalcodes' => array('6760','6761','6762'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vleteren',
		'country' => 'BE',
		'postalcodes' => array('8640'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vloesberg',
		'country' => 'BE',
		'postalcodes' => array('7880'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Voeren',
		'country' => 'BE',
		'postalcodes' => array('3790','3791','3792','3793','3798'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vorselaar',
		'country' => 'BE',
		'postalcodes' => array('2290'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vorst',
		'country' => 'BE',
		'postalcodes' => array('1190'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vosselaar',
		'country' => 'BE',
		'postalcodes' => array('2350'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Vresse-Sur-Semois',
		'country' => 'BE',
		'postalcodes' => array('5550'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waarschoot',
		'country' => 'BE',
		'postalcodes' => array('9950'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waasmunster',
		'country' => 'BE',
		'postalcodes' => array('9250'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wachtebeke',
		'country' => 'BE',
		'postalcodes' => array('9185'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Walcourt',
		'country' => 'BE',
		'postalcodes' => array('5650','5651'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Walhain',
		'country' => 'BE',
		'postalcodes' => array('1457'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wanze',
		'country' => 'BE',
		'postalcodes' => array('4520'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waregem',
		'country' => 'BE',
		'postalcodes' => array('8790','8791','8792','8793'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wasseiges',
		'country' => 'BE',
		'postalcodes' => array('4219'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waterloo',
		'country' => 'BE',
		'postalcodes' => array('1410'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Watermaal-Bosvoorde',
		'country' => 'BE',
		'postalcodes' => array('1170'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waver',
		'country' => 'BE',
		'postalcodes' => array('1300','1301'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Weismes',
		'country' => 'BE',
		'postalcodes' => array('4950'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Welkenraedt',
		'country' => 'BE',
		'postalcodes' => array('4840','4841'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wellen',
		'country' => 'BE',
		'postalcodes' => array('3830','3831','3832'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wellin',
		'country' => 'BE',
		'postalcodes' => array('6920','6921','6922','6924'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wemmel',
		'country' => 'BE',
		'postalcodes' => array('1780'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wervik',
		'country' => 'BE',
		'postalcodes' => array('8940'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Westerlo',
		'country' => 'BE',
		'postalcodes' => array('2260'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wetteren',
		'country' => 'BE',
		'postalcodes' => array('9230'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wevelgem',
		'country' => 'BE',
		'postalcodes' => array('8560'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wezembeek-Oppem',
		'country' => 'BE',
		'postalcodes' => array('1970'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wezet',
		'country' => 'BE',
		'postalcodes' => array('4600','4601','4602'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wichelen',
		'country' => 'BE',
		'postalcodes' => array('9260'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wielsbeke',
		'country' => 'BE',
		'postalcodes' => array('8710'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wijnegem',
		'country' => 'BE',
		'postalcodes' => array('2110'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Willebroek',
		'country' => 'BE',
		'postalcodes' => array('2830'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wingene',
		'country' => 'BE',
		'postalcodes' => array('8750'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wommelgem',
		'country' => 'BE',
		'postalcodes' => array('2160'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wortegem-Petegem',
		'country' => 'BE',
		'postalcodes' => array('9790'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Wuustwezel',
		'country' => 'BE',
		'postalcodes' => array('2990'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Yvoir',
		'country' => 'BE',
		'postalcodes' => array('5530'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zandhoven',
		'country' => 'BE',
		'postalcodes' => array('2240','2242','2243'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zaventem',
		'country' => 'BE',
		'postalcodes' => array('1930','1931','1932','1933'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zedelgem',
		'country' => 'BE',
		'postalcodes' => array('8210','8211'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zele',
		'country' => 'BE',
		'postalcodes' => array('9240'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zelzate',
		'country' => 'BE',
		'postalcodes' => array('9060'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zemst',
		'country' => 'BE',
		'postalcodes' => array('1804','1980','1981','1982'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zingem',
		'country' => 'BE',
		'postalcodes' => array('9750'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zinnik',
		'country' => 'BE',
		'postalcodes' => array('7060','7061','7062','7063'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zoersel',
		'country' => 'BE',
		'postalcodes' => array('2980'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zomergem',
		'country' => 'BE',
		'postalcodes' => array('9930','9931','9932'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zonhoven',
		'country' => 'BE',
		'postalcodes' => array('3520'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zonnebeke',
		'country' => 'BE',
		'postalcodes' => array('8980'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zottegem',
		'country' => 'BE',
		'postalcodes' => array('9620'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zoutleeuw',
		'country' => 'BE',
		'postalcodes' => array('3440'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zuienkerke',
		'country' => 'BE',
		'postalcodes' => array('8377'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zulte',
		'country' => 'BE',
		'postalcodes' => array('9870'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zutendaal',
		'country' => 'BE',
		'postalcodes' => array('3690'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zwalm',
		'country' => 'BE',
		'postalcodes' => array('9630','9636'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zwevegem',
		'country' => 'BE',
		'postalcodes' => array('8550','8551','8552','8553','8554'),
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Zwijndrecht',
		'country' => 'BE',
		'postalcodes' => array('2070'),
	),
	// Speciallekes
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waterwegen en Zeekanaal (afdeling Bovenschelde)',
		'description' => 'Waterwegen in Oost- en West-Vlaanderen, behalve langs Schelde vanaf Gentbrugge richting Antwerpen.',
		'country' => 'BE',
		'postalcodes' => array_merge($postcodesOostVlaanderen, $postcodesWestVlaanderen), // TODO: check this
		'types' => array('jaagpad'),
		'email' => array
		(
			'Contact' => 'bovenschelde@wenz.be'
		),
		'links' => array
		(
			'Website' => 'http://wenz.be',
			'Twitter' => 'https://twitter.com/wenz_nv',
			'Contactformulier' => 'http://www.wenz.be/nl/contact/'
		)
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waterwegen en Zeekanaal (afdeling Zeekanaal)',
		'description' => 'Zeekanaal Brussel-Schelde, het Kanaal Leuven-Dijle, het Kanaal naar Charleroi, het Netekanaal en de Boven-Zenne',
		'country' => 'BE',
		'postalcodes' => array_merge($postcodesVlaamsBrabant, $postcodesProvincieAntwerpen), // TODO: check this
		'types' => array('jaagpad'),
		'email' => array
		(
			'Contact' => 'zeekanaal@wenz.be'
		),
		'links' => array
		(
			'Website' => 'http://wenz.be',
			'Twitter' => 'https://twitter.com/wenz_nv',
			'Contactformulier' => 'http://www.wenz.be/nl/contact/'
		)
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'Waterwegen en Zeekanaal (afdeling Zeeschelde)',
		'description' => 'Schelde van Gentbrugge tot de Nederlandse grens, de Durme tot de afdamming in Lokeren, de Rupel, de Dijle, de Benedenzenne, de Grote en Kleine Nete en de Demer tot in Diest.',
		'country' => 'BE',
		'postalcodes' => array_merge($postcodesOostVlaanderen, $postcodesProvincieAntwerpen), // TODO: check this
		'types' => array('jaagpad'),
		'email' => array
		(
			'Contact' => 'zeekanaal@wenz.be'
		),
		'links' => array
		(
			'Website' => 'http://wenz.be',
			'Twitter' => 'https://twitter.com/wenz_nv',
			'Contactformulier' => 'http://www.wenz.be/nl/contact/'
		)
	),
	array
	(
		'id' => ++$jurisdictionID,
		'name' => 'De Scheepvaart',
		'description' => 'Waterwegen in Limburg + het Albertkanaal in Antwerpen',
		'country' => 'BE',
		'postalcodes' => array_merge($postcodesLimburg, $postcodesProvincieAntwerpen),
		'types' => array('jaagpad', 'Albertkanaal'),
		'email' => array
		(
			'Contact' => 'info@descheepvaart.be'
		)
	),
);

return $jurisdictions;
