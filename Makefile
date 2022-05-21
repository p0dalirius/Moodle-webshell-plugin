.PHONY: all build

VERSION := 1.1.0

all: build

build:
	@if [ ! -d ./dist/ ]; then mkdir ./dist/; fi
	@if [ -f ./dist/moodle-webshell-plugin-${VERSION}.zip ]; then rm ./dist/moodle-webshell-plugin-${VERSION}.zip; fi
	@zip -r ./dist/moodle-webshell-plugin-${VERSION}.zip ./moodle_webshell/
	@echo "[+] Saved to ./dist/moodle-webshell-plugin-${VERSION}.zip"
