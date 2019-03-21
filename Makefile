conf-git-lib:
	git config --global user.name "libna"
	git config --global user.email "libnarodrigues723@gmail.com"

conf-git-jose:
	git config --global user.name "joselimabar"
	git config --global user.email "jrlima150305@gmail.com"


conf-git-geovane:
	git config --global user.name "geovanejose"
	git config --global user.email "geovanejose240899@gmail.com"

conf-git-rebeca:
	git config --global user.name "rebecacristina"
	git config --global user.email "rebecacristina535@gmail.com"

conf-git-raul:
	git config --global user.name "Raul Barros"
	git config --global user.email "raulbarrosmr@gmail.com"	

conf-git-wolaci:
	git config --global user.name "Wolaci"
	git config --global user.email "wolacijose8@gmail.com"	

conf:
	sudo apt-get install php7.2 php7.2-mbstring php7.2-mysql php7.2-intl php7.2-xml composer # isso só serve pra sistemas que usam o apt
	cd student-monitoring && composer install --no-scripts
	# npm install
	# npm run dev
	cd student-monitoring && cp .env.example .env # copia o example
	cd student-monitoring && php artisan key:generate # gera a chave
	sudo apt-get install mysql-server-5.7 # instala o bd
	$(MAKE) bd-conf # roda a regra do bd-conf

bd-conf:
	mysql -u root -p --execute="drop database if exists SME; create database SME; drop user if exists 'estudante'; create user 'estudante' identified by 'estudante2019'; grant all privileges on SME.* to 'estudante';"
	cd student-monitoring && sed -i 's/DB_DATABASE.*/DB_DATABASE=SME/' .env # ajusta o nome do banco no .env
	cd student-monitoring && sed -i 's/DB_USERNAME.*/DB_USERNAME=estudante/' .env # ajusta o nome de usuário no .env
	cd student-monitoring && sed -i 's/DB_PASSWORD.*/DB_PASSWORD=estudante2019/' .env # ajusta a senha no .env
	cd student-monitoring && php artisan migrate:refresh --seed




