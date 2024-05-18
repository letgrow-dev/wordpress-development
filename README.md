# WordPress setup using docker and wsl (or linux)

It's a minimal docker compose configuration with some handy little scripts (check Makefile) that allows you easily setup wordpress locally for development

### Note about efficient development

This repository introduces revolutionized `instant reload technology`. If you are tired of that your `super duper hot reloading or hmr` in vue, react or svelte works slow and take seconds (or minutes) you must check this repo!

### Hot reloading benchmark

| Fastet reload | Avg. 1000 reloads |
| - | - |
| <= 0 ms | <= 0 ms |

## TLDR;

- run `make setup` only for the first time (will download and setup latest wordpress)
- run `make` to start wordpress (wait for docker to build)
- go to http://localhost/ your wordpress is ready
- you can develop in `wordpress/` directory

There is no need to touch anything else

## Requirements

- wsl (or linux)
- docker with docker-compose (use docker desktop for windows)
- unzip (you can install it with `sudo apt install unzip` in wsl)
- make
- wget

# FAQ

## What `var/lib/mysql` directory do? 

It will be mounted by a docker to persist your database files. Thanks to this your database won't go anywhere when you disable or stop docker

## What is `GID` and `UID` in `.env.example` file

This are your linux user and group ID's. We set this to avoid permission mismatch between your local user and the in docker user

# Any questions?

Just open a PR or create an issue 