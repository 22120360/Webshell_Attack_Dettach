#!/bin/bash

# Cài đặt Kibana
echo "deb https://artifacts.elastic.co/packages/8.x/apt stable main" | tee /etc/apt/sources.list.d/elastic-8.x.list
apt update
apt install -y kibana

# Khởi động Kibana
systemctl enable kibana
systemctl start kibana

