![X-Updare Store](https://img.shields.io/website?down_color=red&down_message=Offline&label=X-Update%20Store&style=for-the-badge&up_color=308311&up_message=online&url=https%3A%2F%2Fxoopscube.xyz%2Fuploads%2Fxupdatemaster%2Fstores_json_V1.txt)
[![XOOPSCube powered-by-electricity](https://img.shields.io/badge/Powered%20by-Electricity-face74?style=for-the-badge&labelColor=203244&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IiNmYWNlNzQiIGQ9Ik0xNC42OSAyLjIxTDQuMzMgMTEuNDljLS42NC41OC0uMjggMS42NS41OCAxLjczTDEzIDE0bC00Ljg1IDYuNzZjLS4yMi4zMS0uMTkuNzQuMDggMS4wMWMuMy4zLjc3LjMxIDEuMDguMDJsMTAuMzYtOS4yOGMuNjQtLjU4LjI4LTEuNjUtLjU4LTEuNzNMMTEgMTBsNC44NS02Ljc2Yy4yMi0uMzEuMTktLjc0LS4wOC0xLjAxYS43Ny43NyAwIDAgMC0xLjA4LS4wMnoiLz48L3N2Zz4=)](https://github.com/xoopscube)
[![XCL](https://img.shields.io/badge/XCL-Made%20with%20passion-b0201d?style=for-the-badge&labelColor=991015&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IndoaXRlIiBkPSJtMTIgMjEuMzVsLTEuNDUtMS4zMkM1LjQgMTUuMzYgMiAxMi4yNyAyIDguNUMyIDUuNDEgNC40MiAzIDcuNSAzYzEuNzQgMCAzLjQxLjgxIDQuNSAyLjA4QzEzLjA5IDMuODEgMTQuNzYgMyAxNi41IDNDMTkuNTggMyAyMiA1LjQxIDIyIDguNWMwIDMuNzctMy40IDYuODYtOC41NSAxMS41M0wxMiAyMS4zNVoiLz48L3N2Zz4=)](https://github.com/xoopscube)

[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/protector)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/XOOPSCube%20Package-XCL-blue)

## ///// — Protector :: Security Module

![alt text](https://repository-images.githubusercontent.com/8041553/494f183f-cd64-41b1-8ad7-4d9be8fdbfd5)


MODULE | Protector
------------ | -------------
Description | Protector is a module to secure XCL Web Application Platform and CMS from various and malicious attacks..
Render Engine | Smarty v2 and XCube Layout
Version | 3.58.0
Author | Nobuhiro Yasutomi @nbuy XCL PHP8  
Author | Nuno Luciano @gigamaster XCL PHP7 
Author | Original by Gijoe (https://peak.ne.jp/)
Copyright | 2005-2023 Authors
License | GPL


##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 7.2 - PHP 8.2
          MySQL 5.6, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.3.+



-----


### Overview

Protector safeguards your website against multiple security threats including DoS attacks, SQL Injection, XSS vulnerabilities, session hijacking, and global variable contamination, Content Security Policy (CSP) implementation, CORS protection, IP filtering, brute force prevention, and comprehensive security logging.

### Features :

- Content Security Policy (CSP)
- DoS attack and Bad Crawlers (and bots collecting e-mails)
- SQL Injection
- XSS (not all though)
- System globals pollution
- Session hi-jacking
- Null-bytes
- Directory Traversal
- Some sort of CSRF
- Brute Force
- Camouflaged Image File Uploading (== IE Content-Type XSS)
- Executable File Uploading Attack
- XMLRPC's eval() and SQL Injection Attacks
- SPAMs for comment, trackback etc.

### Proxy

The Web Proxy feature in the Protector module offers several layers of protection when accessing external resources:

1. **Content Filtering**: The proxy scans external content for malicious code, scripts, or other harmful elements before delivering it to users.

2. **URL Validation**: It validates external URLs to prevent access to known malicious websites or phishing domains.

3. **Identity Protection**: By routing requests through your server, it masks the identity of your users when they access external resources.

4. **Resource Caching**: As shown in the dashboard statistics, it caches external resources to improve performance and reduce repeated exposure to potentially harmful content.

5. **Access Control**: The proxy can restrict access to certain types of content or domains based on configurable rules.

6. **Malicious Request Blocking**: The dashboard shows "Blocked Malicious" statistics, indicating that it actively blocks requests that appear to be harmful.

7. **Traffic Monitoring**: It logs all proxy requests, allowing administrators to review access patterns and identify potential security issues.

This proxy acts as a security intermediary between your users and external web content, similar to how corporate proxies protect internal networks.  
It's particularly useful when you need to display or access external content within your XOOPSCube site while maintaining security controls.

The statistics displayed in the dashboard (total requests, cached resources, and blocked malicious requests) help you monitor the proxy's effectiveness in protecting your site.
