init:
	mkdir -p logs
	composer install
	npm install datatables.net datatables.net-dt
	ln -s $(shell pwd)/node_modules public/static/js/node_modules
	ln -s $(shell pwd)/node_modules/datatables.net-dt/images public/static/images
	cp $(shell pwd)/node_modules/datatables.net-dt/css/jquery.datatables.css public/static/css