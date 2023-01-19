<?php
	include 'config.php';
	include 'controller.php';
	$record = getRecord($db, $_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Магазин цветов</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" type="text/css" href="css/tablet.css">
	<link rel="stylesheet" media="screen and (max-width: 650px)" type="text/css" href="css/mobile.css">
</head>
<body class="containermain">
	<div class="container1 nav">
		<div><a href="#" id="nav1">Каталог</a></div>
		<div><a href="#" id="nav2">Доставка и оплата</a></div>
		<div><a href="#" id="nav3">Отзывы</a></div>
		<div><a href="#" id="nav4">Спецпредложения</a></div>
		<div><a href="#" id="nav5">Контакты</a></div>
		<div><a href="#" id="nav6">Корзина</a></div>
	</div>
	<?php if (!isset($_GET['id'])) { ?>
	<div class="container2 info">
		<div>
			<div><p id="info1">Авторские букеты в Петербурге</p></div>
			<div><p id="info2">Оригинальные свежие букеты с доставкой по всему городу</p></div>
			<div class="oval">
				<a href="#" id="link1"><strong>Смотреть каталог</strong></a>
			</div>
		</div>
		<div>
			<img id="picture1" src="images/img1.jpg" >
		</div>
	</div>
	<div class="main">
		<div class="container31">
			<div class="container3">
				<svg width="82" height="52" viewBox="0 0 82 52" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M80.6664 24.0056C79.8139 22.987 78.651 22.3251 77.3179 22.0776L76.6917 13.5574C77.3094 13.5515 77.8362 13.1054 77.9438 12.4942L78.1853 11.1213C78.4441 9.64958 78.0831 8.19685 77.1947 7.13571C76.3075 6.0757 75.0084 5.49175 73.5368 5.49175H64.1109L64.5698 2.88347C64.7 2.14266 64.5113 1.40296 64.0523 0.854493C63.5978 0.311484 62.9144 0 62.1773 0H15.7792C14.4072 0 13.1442 1.07012 12.9038 2.43664L8.79883 25.7766C8.67583 26.4766 9.14205 27.1442 9.84033 27.2675C9.9156 27.2809 9.99055 27.2873 10.0647 27.2873C10.676 27.2873 11.2178 26.8478 11.3275 26.2234L15.4327 2.88347C15.4597 2.72982 15.657 2.57408 15.7791 2.57408L62.0166 2.57424L57.9356 25.7766C57.8124 26.4766 58.2787 27.1442 58.9771 27.2675C59.6746 27.3907 60.3413 26.9235 60.4643 26.2234L60.7603 24.5409H76.1138C76.1143 24.5409 76.115 24.5409 76.1156 24.5409C76.1162 24.5409 76.1169 24.5409 76.1174 24.5409C77.1786 24.5411 78.0954 24.9385 78.6994 25.6599C79.115 26.1565 79.3575 26.7746 79.4158 27.4584H75.151C74.5278 27.4584 73.9948 27.9069 73.8865 28.5221L73.4037 31.268C73.2091 32.3743 73.4839 33.4704 74.1575 34.2753C74.8219 35.0692 75.8304 35.5244 76.9241 35.5244H78.1329L77.1368 41.1878H73.747C73.5239 40.0551 73.0356 39.0132 72.2955 38.1293C70.9824 36.5602 69.05 35.6962 66.8547 35.6962C63.3346 35.6962 59.9385 38.0051 58.3486 41.188H57.8325L59.4986 31.7152C59.6216 31.0151 59.1555 30.3475 58.4571 30.2242C57.7591 30.1006 57.0929 30.5681 56.9699 31.2683L55.2251 41.1881H31.4576C31.2345 40.0554 30.7462 39.0137 30.0061 38.1297C28.6928 36.5605 26.7605 35.6965 24.5651 35.6965C21.045 35.6965 17.6489 38.0054 16.059 41.1883L8.69537 41.1881L9.20851 38.2708H14.9788C15.6878 38.2708 16.2628 37.6945 16.2628 36.9836C16.2628 36.2728 15.688 35.6964 14.9788 35.6964H1.28397C0.574961 35.6964 0 36.2726 0 36.9836C0 37.6944 0.574801 38.2708 1.28397 38.2708H6.60133L6.14248 40.8791C6.01227 41.6199 6.20093 42.3596 6.65994 42.908C7.11447 43.451 7.79785 43.7625 8.53489 43.7625H15.2253C14.8772 45.946 15.4003 48.0029 16.7096 49.5669C18.0229 51.136 19.9552 52 22.1506 52C26.5203 52 30.7009 48.4435 31.4698 44.0716C31.4879 43.968 31.5021 43.8651 31.5165 43.7624H57.5149C57.1667 45.9456 57.6898 48.0026 58.9992 49.5667C60.3125 51.1359 62.2448 51.9998 64.4402 51.9998C68.8099 51.9998 72.9905 48.4433 73.7594 44.0714C73.7775 43.9679 73.7917 43.865 73.8061 43.7622H78.2144C78.8376 43.7622 79.3706 43.3138 79.4789 42.6985L81.8937 28.9691C82.2214 27.1055 81.7856 25.3428 80.6664 24.0056ZM61.2134 21.9672L62.6924 13.5579H74.1173L74.7354 21.9672H61.2134ZM75.6564 10.6744L75.602 10.9837H63.145L63.6582 8.06615H73.5368C74.2362 8.06615 74.8367 8.32337 75.2275 8.79043C75.6327 9.27435 75.7852 9.94324 75.6564 10.6744ZM28.9411 43.6249C28.3786 46.8237 25.3323 49.4259 22.1506 49.4259C20.7274 49.4259 19.4936 48.8884 18.6766 47.9125C17.8361 46.9082 17.5158 45.5444 17.7748 44.0721C18.3374 40.8733 21.3836 38.2711 24.5653 38.2711C25.9884 38.2711 27.2223 38.8087 28.0392 39.7847C28.8797 40.7887 29.2 42.1526 28.9411 43.6249ZM71.2305 43.6249C70.6679 46.8237 67.6217 49.4259 64.44 49.4259C63.0169 49.4259 61.783 48.8884 60.9661 47.9123C60.1256 46.908 59.8053 45.5443 60.0642 44.0719C60.6267 40.8731 63.673 38.2709 66.8547 38.2709C68.2777 38.2709 69.5117 38.8085 70.3287 39.7845C71.1692 40.7887 71.4895 42.1526 71.2305 43.6249ZM78.5857 32.9508H76.9241V32.9507C76.5815 32.9507 76.3051 32.8367 76.1246 32.6212C75.9373 32.3974 75.869 32.0758 75.9324 31.7156L76.2283 30.0335H79.0988L78.5857 32.9508Z" fill="#AE7C78"/>
					<path d="M25.4749 42.0428C25.0204 41.4998 24.337 41.1883 23.5998 41.1883C22.2278 41.1883 20.9648 42.2584 20.7244 43.6249C20.5942 44.3658 20.7828 45.1054 21.2418 45.6539C21.6964 46.1969 22.3798 46.5084 23.1168 46.5084C24.4889 46.5084 25.7518 45.4381 25.9922 44.0719C26.1226 43.331 25.9341 42.5914 25.4749 42.0428Z" fill="#AE7C78"/>
					<path d="M67.7637 42.0428C67.309 41.4998 66.6256 41.1883 65.8888 41.1883C64.5167 41.1883 63.2537 42.2584 63.0135 43.6248C62.8833 44.3658 63.0716 45.1053 63.5308 45.6539C63.9853 46.1969 64.6687 46.5084 65.4057 46.5084C66.7778 46.5084 68.0408 45.4381 68.2812 44.0719C68.4116 43.331 68.2229 42.5914 67.7637 42.0428Z" fill="#AE7C78"/>
					<path d="M51.7904 35.6965H35.5213C34.8123 35.6965 34.2373 36.2728 34.2373 36.9837C34.2373 37.6945 34.8121 38.2709 35.5213 38.2709H51.7904C52.4995 38.2709 53.0744 37.6947 53.0744 36.9837C53.0743 36.2728 52.4995 35.6965 51.7904 35.6965Z" fill="#AE7C78"/>
					<path d="M28.6739 30.2048H4.98905C4.28004 30.2048 3.70508 30.781 3.70508 31.492C3.70508 32.2028 4.27972 32.7792 4.98905 32.7792H28.6739C29.3829 32.7792 29.9579 32.2029 29.9579 31.492C29.9579 30.781 29.3831 30.2048 28.6739 30.2048Z" fill="#AE7C78"/>
					<path d="M53.1919 25.0263L48.4385 20.9075C47.9019 20.4428 47.0912 20.5017 46.6274 21.0396C46.1636 21.5775 46.2227 22.3902 46.7592 22.8552L48.9034 24.7132H16.3479C15.6389 24.7132 15.064 25.2894 15.064 26.0004C15.064 26.7112 15.6388 27.2876 16.3479 27.2876H48.0892L45.441 29.0463C44.8497 29.4388 44.6881 30.2375 45.0797 30.8302C45.3266 31.2041 45.735 31.4066 46.1511 31.4066C46.3946 31.4066 46.6409 31.3372 46.859 31.1922L53.0614 27.0734C53.3964 26.8512 53.608 26.4845 53.6336 26.0824C53.6592 25.6802 53.4959 25.2894 53.1919 25.0263Z" fill="#AE7C78"/>
				</svg>
				<div>
					<p id="truck1">Быстрая доставка</p>
					<p id="truck2">Можем собрать букет и передать его в доставку всего за час.</p>
				</div>
			</div>
			<div class="container3">
				<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M35.7022 13.8987C35.9137 13.8987 36.127 13.8819 36.34 13.8482C37.4001 13.6801 38.3312 13.1092 38.9619 12.2408L42.7893 6.9709C42.9444 6.75732 42.9779 6.47863 42.8777 6.23437C42.7776 5.99012 42.5581 5.81512 42.2977 5.77186C42.2299 5.76059 40.7288 5.51409 38.8959 5.49378C38.3089 3.75767 37.6114 2.407 37.5792 2.34484C37.4576 2.11054 37.2233 1.95596 36.96 1.93636C36.6971 1.91625 36.442 2.03467 36.287 2.24836L32.4596 7.51822C31.8289 8.38668 31.5741 9.44872 31.7421 10.5088C31.8666 11.2938 32.2124 12.0077 32.7358 12.5816C32.1564 13.2701 31.1363 14.523 30.0179 16.0822V15.4161C30.0179 14.9954 29.6769 14.6544 29.2562 14.6544C28.8355 14.6544 28.4945 14.9954 28.4945 15.4161V18.3265C27.8832 19.2834 27.2878 20.2952 26.7614 21.3223V17.0447C26.7614 17.0446 26.7614 17.0444 26.7614 17.0442V15.7317L28.9808 13.5123C29.2782 13.2149 29.2782 12.7325 28.9808 12.4352C28.6833 12.1377 28.201 12.1377 27.9036 12.4352L26.7612 13.5772V11.2197C28.6137 10.8626 30.0177 9.22995 30.0177 7.27478V0.761688C30.0177 0.497728 29.881 0.252557 29.6565 0.113721C29.4319 -0.0251148 29.1516 -0.0377085 28.9154 0.0804085C28.8538 0.111182 27.4955 0.794391 25.9996 1.8546C24.5044 0.794798 23.1462 0.11169 23.0837 0.0804085C22.8474 -0.0377085 22.567 -0.0250132 22.3426 0.113721C22.118 0.252557 21.9813 0.497728 21.9813 0.761688V7.27478C21.9813 9.22995 23.3853 10.8627 25.2378 11.2197V15.2055L23.2816 13.2493C22.9841 12.9518 22.5018 12.9518 22.2044 13.2493C21.907 13.5468 21.907 14.0291 22.2044 14.3265L25.2379 17.3599V21.3223C23.295 17.5318 20.4125 13.9468 19.2635 12.5816C19.7869 12.0077 20.1328 11.2938 20.2572 10.5088C20.4253 9.44872 20.1704 8.38668 19.5397 7.51822L15.7124 2.24836C15.5573 2.03467 15.3023 1.91635 15.0393 1.93636C14.7761 1.95596 14.5418 2.11054 14.4201 2.34484C14.3876 2.407 13.6902 3.75778 13.1032 5.49388C11.2711 5.5144 9.76934 5.76059 9.7014 5.77186C9.44099 5.81512 9.22142 5.99012 9.12138 6.23437C9.02124 6.47863 9.05475 6.75732 9.20984 6.9709L13.0372 12.2408C13.6679 13.1092 14.599 13.68 15.6591 13.8482C15.8722 13.882 16.0853 13.8987 16.297 13.8987C16.9028 13.8987 17.4959 13.7612 18.0397 13.4964C18.275 13.7764 18.6001 14.17 18.9849 14.6545H18.3161C17.8954 14.6545 17.5544 14.9955 17.5544 15.4162C17.5544 15.8369 17.8954 16.1779 18.3161 16.1779H20.156C21.2689 17.6745 22.5587 19.5575 23.6074 21.5003C22.3685 20.2829 20.9917 19.1905 19.4882 18.2337C14.9267 15.3308 10.8167 14.6888 10.6439 14.6629C10.4248 14.6301 10.2019 14.6944 10.0339 14.839C9.86583 14.9838 9.76924 15.1945 9.76924 15.4162C9.76924 15.538 9.786 18.4448 11.2387 22.492C12.5506 26.1465 15.3373 31.4531 21.1672 36.135V38.9264L17.9364 51.0419C17.8753 51.2705 17.9241 51.5146 18.0683 51.7023C18.2124 51.89 18.4357 52 18.6723 52H33.3267C33.5634 52 33.7866 51.89 33.9307 51.7023C34.0749 51.5146 34.1237 51.2707 34.0626 51.0419L30.8318 38.9264V36.135C36.6616 31.4531 39.4484 26.1465 40.7603 22.492C42.2131 18.4448 42.2298 15.538 42.2298 15.4162C42.2298 15.1945 42.1331 14.9838 41.9651 14.839C41.7971 14.6943 41.5746 14.6299 41.355 14.6629C41.2542 14.6781 38.8475 15.0503 35.679 16.5086C33.6029 17.4641 30.9077 19.0372 28.3851 21.5131C29.4352 19.5663 30.7283 17.678 31.8436 16.1779H33.6828C34.1035 16.1779 34.4445 15.8369 34.4445 15.4162C34.4445 14.9955 34.1035 14.6545 33.6828 14.6545H33.0145C33.3992 14.1701 33.7241 13.7765 33.9594 13.4965C34.5033 13.7612 35.0963 13.8987 35.7022 13.8987ZM40.7966 7.12213L39.6464 8.70579C39.5922 8.18447 39.4936 7.62629 39.3466 7.02849C39.883 7.04677 40.3799 7.08283 40.7966 7.12213ZM12.3526 8.70579L11.2022 7.12183C11.6185 7.08252 12.1153 7.04667 12.6524 7.02859C12.5054 7.62639 12.4068 8.18447 12.3526 8.70579ZM17.7545 11.8981C17.2152 12.2897 16.5558 12.448 15.8976 12.3435C15.2395 12.2391 14.6614 11.8848 14.2698 11.3456C13.1775 9.84166 14.3361 6.28759 15.2383 4.1882L18.307 8.41339C19.1153 9.52641 18.8675 11.0897 17.7545 11.8981ZM28.4943 2.05488V4.00904C28.1446 3.62016 27.7352 3.22732 27.2662 2.83112C27.7108 2.5307 28.1339 2.26796 28.4943 2.05488ZM23.5047 7.27478V2.05275C25.4685 3.22132 28.4944 5.41598 28.4944 7.27478C28.4944 8.65044 27.3752 9.76955 25.9996 9.76955C24.6241 9.76955 23.5047 8.65044 23.5047 7.27478ZM12.6961 22.0424C11.7947 19.5518 11.4721 17.4989 11.3567 16.3671C12.7772 16.7132 15.6308 17.5847 18.6704 19.5189C21.1884 21.1214 23.3268 23.1266 25.0257 25.4792C26.9914 28.2009 28.373 31.4033 29.1418 35.0079H27.3677C26.3936 30.7348 24.4765 27.0973 21.6624 24.1897C21.3699 23.8873 20.8877 23.8794 20.5853 24.1721C20.283 24.4646 20.2752 24.9469 20.5678 25.2492C23.1107 27.8766 24.8678 31.1567 25.8017 35.0079H22.1965C16.6169 30.5533 13.9505 25.5089 12.6961 22.0424ZM29.3084 36.5312V38.2644H22.6905V36.5312H29.3084ZM32.3353 50.4764H29.1088L28.98 49.5095C28.9244 49.0925 28.5413 48.7993 28.1243 48.8551C27.7073 48.9107 27.4144 49.2937 27.4699 49.7108L27.572 50.4763H19.6638L22.5141 39.7877H26.1468L27.0356 46.4542C27.0866 46.8371 27.4138 47.1153 27.7898 47.1153C27.8233 47.1153 27.8572 47.1131 27.8913 47.1085C28.3083 47.053 28.6012 46.6699 28.5457 46.2529L27.6836 39.7877H29.4849L32.3353 50.4764ZM36.2676 17.9149C38.1088 17.0627 39.6939 16.5988 40.6422 16.3677C40.5267 17.4998 40.204 19.5523 39.3029 22.0424C38.1069 25.3475 35.628 30.0872 30.5637 34.3824C29.8307 31.1081 28.6092 28.1478 26.9206 25.5537C29.8487 21.4679 33.6027 19.148 36.2676 17.9149ZM33.692 8.41339L36.7613 4.18749C37.6642 6.28587 38.8237 9.83872 37.7292 11.3456C37.3376 11.8848 36.7595 12.2391 36.1014 12.3435C35.4432 12.4479 34.7838 12.2897 34.2446 11.8981C33.1315 11.0897 32.8837 9.52652 33.692 8.41339Z" fill="#AE7C78"/>
					<path d="M19.1328 21.9565C18.5944 21.5509 18.0279 21.1634 17.4487 20.8045C17.091 20.5828 16.6216 20.6931 16.4 21.0507C16.1784 21.4083 16.2886 21.8778 16.6462 22.0995C17.1861 22.4341 17.7143 22.7955 18.2162 23.1733C18.3535 23.2767 18.5143 23.3266 18.6738 23.3266C18.9048 23.3266 19.1331 23.2219 19.2829 23.0232C19.5361 22.6871 19.4687 22.2096 19.1328 21.9565Z" fill="#AE7C78"/>
				</svg>
				<div>
					<p id="flower1">Всегда свежие цветы</p>
					<p id="flower2">Тщательно следим за состоянием цветов, а опытные флористы отбирают для букетов каждый цветок.</p>
				</div>
			</div>
			<div class="container3">
				<svg width="59" height="52" viewBox="0 0 59 52" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M51.6799 9.18921H48.9579C48.4838 9.18921 48.0996 9.5734 48.0996 10.0475C48.0996 10.5217 48.4838 10.9059 48.9579 10.9059H51.6799C52.154 10.9059 52.5382 10.5217 52.5382 10.0475C52.5382 9.5734 52.1539 9.18921 51.6799 9.18921Z" fill="#AE7C78"/>
					<path d="M36.4064 13.3299C31.6069 13.3299 27.7021 17.2362 27.7021 22.0376C27.7021 26.8373 31.6068 30.7421 36.4064 30.7421C41.2078 30.7421 45.114 26.8373 45.114 22.0376C45.114 17.2362 41.2078 13.3299 36.4064 13.3299V13.3299ZM36.4064 29.0256C32.5534 29.0256 29.4188 25.8908 29.4188 22.0377C29.4188 18.1829 32.5534 15.0466 36.4064 15.0466C40.2611 15.0466 43.3974 18.1828 43.3974 22.0377C43.3974 25.8907 40.2613 29.0256 36.4064 29.0256Z" fill="#AE7C78"/>
					<path d="M55.3814 4.60615H44.9537L43.9443 1.81646C43.7816 1.36715 43.2863 0 41.8869 0H28.5343C27.1349 0 26.6396 1.36715 26.4767 1.8168L25.4674 4.60615H16.977V2.53116C16.977 1.40114 16.0577 0.48181 14.9277 0.48181H11.1036C9.97545 0.48181 9.05761 1.40114 9.05761 2.53116V4.64323C7.51639 4.87967 6.33223 6.21569 6.33223 7.82352V25.3803L2.44342 26.1346C0.808584 26.4532 -0.262271 28.0416 0.0559987 29.6743L3.90991 49.5583C4.19121 50.9969 5.4604 52 6.87779 52C7.06639 52 7.25774 51.9823 7.44967 51.9453L15.8334 50.3187C16.2987 50.2285 16.6028 49.778 16.5125 49.3126C16.4222 48.8473 15.9715 48.5429 15.5064 48.6335L7.12419 50.2598C6.41784 50.3961 5.7322 49.933 5.59487 49.2303L1.74096 29.3468C1.60363 28.6422 2.0661 27.9571 2.77096 27.8195L23.6748 23.7647C24.0137 23.6998 24.3599 23.7714 24.6498 23.9672C24.9396 24.1631 25.1351 24.4575 25.2004 24.798L29.0575 44.678C29.1949 45.3826 28.7324 46.0677 28.0275 46.2052L19.6405 47.8318C19.1752 47.9221 18.8711 48.3726 18.9613 48.8379C19.0516 49.3032 19.502 49.607 19.9673 49.5172L28.3551 47.8903C29.9899 47.5717 31.0608 45.9833 30.7425 44.3504L29.6994 38.9747H39.2801C39.7543 38.9747 40.1385 38.5905 40.1385 38.1163C40.1385 37.6422 39.7543 37.258 39.2801 37.258H29.3664L28.462 32.5962C30.7334 34.3052 33.5171 35.2528 36.4063 35.2528C42.1343 35.2528 47.0221 31.5909 48.8528 26.4862H56.8788V35.7572C56.8788 36.5847 56.2071 37.258 55.3814 37.258H43.4838C43.0096 37.258 42.6255 37.6422 42.6255 38.1163C42.6255 38.5905 43.0096 38.9747 43.4838 38.9747H55.3814C57.1536 38.9747 58.5955 37.5313 58.5955 35.7572V7.82352C58.5955 6.0494 57.1536 4.60615 55.3814 4.60615V4.60615ZM28.0908 2.40127C28.2553 1.94704 28.4045 1.71678 28.5343 1.71678H41.8869C42.0484 1.71678 42.2172 2.08906 42.3302 2.40092L43.1282 4.60615H27.2929L28.0908 2.40127ZM23.1921 22.0377C23.1921 22.0617 23.1933 22.0857 23.1934 22.1096L16.977 23.3155V19.3063H23.4765C23.2906 20.188 23.1921 21.1014 23.1921 22.0377V22.0377ZM10.7742 2.53116C10.7742 2.3508 10.925 2.19847 11.1035 2.19847H14.9276C15.111 2.19847 15.2603 2.34771 15.2603 2.53116V4.60615H10.7742V2.53116ZM8.0489 7.82352C8.0489 6.99609 8.72068 6.32281 9.54628 6.32281H9.91582H15.2603V23.6484L12.3545 24.212V14.5314C12.3545 13.707 11.6839 13.0363 10.8594 13.0363H8.0489V7.82352ZM8.0489 14.753H10.6379V24.5451L8.0489 25.0473V14.753ZM36.4066 33.5359C33.1748 33.5359 30.0945 32.1738 27.9181 29.7919L26.8861 24.4725C26.7343 23.6825 26.2815 22.9979 25.611 22.5448C25.3906 22.3959 25.1556 22.2787 24.9113 22.1931C24.9106 22.1413 24.9086 22.0896 24.9086 22.0377C24.9086 15.6958 30.0666 10.5363 36.4064 10.5363C42.7483 10.5363 47.9076 15.6959 47.9076 22.0377C47.9077 28.3778 42.7484 33.5359 36.4066 33.5359ZM56.8788 24.7693H49.3397C49.5258 23.8876 49.6243 22.974 49.6243 22.0377C49.6243 21.1014 49.5258 20.188 49.3398 19.3063H56.8788V24.7693ZM56.8788 17.5896H48.8535C47.0231 12.4829 42.1349 8.81964 36.4066 8.81964C30.6797 8.81964 25.7927 12.483 23.9627 17.5896H16.9769V6.32281H26.0695H44.3514H55.3813C56.207 6.32281 56.8787 6.99609 56.8787 7.82352V17.5896H56.8788Z" fill="#AE7C78"/>
					<path d="M26.0021 43.462C26.2035 43.1611 26.2767 42.8087 26.2087 42.4722L23.2915 27.8132C23.1364 27.0466 22.3362 26.5781 21.4685 26.7448L5.54621 29.8329C4.67506 30.0013 4.10822 30.7378 4.25711 31.5173L7.17555 46.166C7.24033 46.5049 7.44061 46.8032 7.73976 47.006C8.0015 47.1834 8.32332 47.2766 8.65658 47.2766C8.77045 47.2766 8.88569 47.2658 9.00037 47.2436L24.9193 44.1554C25.3707 44.0683 25.7653 43.8155 26.0021 43.462V43.462ZM7.6386 39.6604L6.00296 31.493L21.6689 28.4545L22.6193 33.2307L20.6107 33.6208C16.7798 34.3637 15.508 35.511 14.2781 36.6203C13.0868 37.6948 11.8563 38.8038 7.6386 39.6604V39.6604ZM8.80158 45.5335L8.40171 43.4708L7.97563 41.3432C12.6603 40.3896 14.127 39.0685 15.4279 37.8951C16.5801 36.8558 17.5752 35.9581 20.9378 35.3061L22.9543 34.9144L24.4629 42.4954L8.80158 45.5335Z" fill="#AE7C78"/>
				</svg>
				<div>
					<p id="camera1">Отправляем фото цветов</p>
					<p id="camera2">Перед доставкой сделаем фотографию букета и отправим вам.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="main2">
		<div class="container4">
			<div>
				<p id="popular">Популярные букеты</p>
			</div>
			<div class="container5">
				<div>
					<p id="nejnost">Букет «Флорентийские мотивы»</p>
					<p id="elegant">Букет, отображающий все фибры вашей любви и уважения.</p>
					<p id="size">30 × 40 см</p>
					<p id="price">3600 руб.</p>
					<div class="oval">
						<a href="#" id="link2">Заказать</a>
					</div>
				</div>
				<div>
					<img id="picture2" src="images/img2.jpg" >
				</div>
			</div>
		</div>
	</div>
	<div class="main3">
		<div class="container6">
			<div>
				<p id="discount1">Скидка 10% на первый заказ</p>
				<p id="discount2">Если заказываете у нас букет впервые — при оформлении заказа введите промокод «Botanika2021» и получите скидку 10%.</p>
			</div>
			<div>
				<img id="picture3" src="images/img3.jpg" >
			</div>
		</div>
	</div>
	<div class="feedback">
		<div class="feedback1">
			<div>
				<p id="feed1">Отзывы</p>
			</div>
			<div class="container7">
				<div>
					<div><p id="feed2">Всё очень понравилось! Быстрое оформление заказа, выбор удобного времени доставки. Всем большое спасибо!</p></div>
					<div><p id="feed3">Регина</p></div>
				</div>
				<div>
					<div><p id="feed4">Внимательные флористы, вежливые. Магазин находится прям рядом с метро. Букет очень понравился, буду ещё заказывать!</p></div>
					<div><p id="feed5">Тамара</p></div>
				</div>
				<div>
					<div><p id="feed6">Выбор букетов на любой вкус и цену. Бывают хорошие скидки, а флористы всегда помогут и точно соберут красивый букет!</p></div>
					<div><p id="feed7">Гульшат</p></div>
				</div>
			</div>
		</div>
	</div>
	<?php } else { ?>
	<div class="main2">
		<div class="container4">
			<div>
				<p id="popular"><?php echo $record['title']; ?></p>
			</div>
			<div class="container5">
				<div>
					<p id="elegant"><?php echo $record['description']; ?></p>
					<p id="price"><?php echo $record['price']; ?> руб.</p>
					<div class="oval">
						<a href="#" id="link2">Заказать</a>
					</div>
				</div>
				<div>
					<img id="picture2" src="/photo/<?php echo $record['photo']; ?>" >
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<footer class="container8">
		<div><a href="#" id="footer1">Каталог</a></div>
		<div><a href="#" id="footer2">Доставка и оплата</a></div>
		<div><a href="#" id="footer3">Отзывы</a></div>
		<div><a href="#" id="footer4">Спецпредложения</a></div>
		<div><a href="#" id="footer5">Контакты</a></div>
	</footer>
</body>
</html>