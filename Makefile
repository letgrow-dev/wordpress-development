default:
	docker compose up -d

stop: 
	docker compose down

setup: prepare-env download-latest-wordpress copy-config

prepare-env:
	yes n | cp -i .env.example .env
	sed -i "s/^UID=.*/UID=`id -u`/g" .env
	sed -i "s/^GID=.*/GID=`id -g`/g" .env

download-latest-wordpress:
	wget https://wordpress.org/latest.zip
	unzip latest.zip
	rm latest.zip

copy-config:
	cp wp-config.php wordpress/wp-config.php

