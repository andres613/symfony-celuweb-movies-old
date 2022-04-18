FROM nginx:latest

RUN apt-get update --fix-missing && apt-get install -y \
    vim curl || true \
    && rm -rf /tmp/*
