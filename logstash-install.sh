#!/bin/bash

# Cài đặt Logstash
echo "deb https://artifacts.elastic.co/packages/8.x/apt stable main" | tee /etc/apt/sources.list.d/elastic-8.x.list
apt update
apt install -y logstash

systemctl enable logstash
systemctl start logstash