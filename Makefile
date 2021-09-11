.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

selenium-start: # runs selenium container
	docker run --name selenium --net=host selenium/standalone-chrome
 

selenium-stop: 
	docker stop selenium && docker rm selenium

selenium-log:
	docker logs -f selenium