# How the web works
A user enters a URL into a browser (for example, Google.com. This request is passed to a domain name server.

The domain name server returns an IP address for the server that hosts the Website (for example, 68.178.157.132).

The browser requests the page from the Web server using the IP address specified by the domain name server.

The Web server returns the page to the IP address specified by the browser requesting the page. The page may also contain links to other files on the same server, such as images, which the browser will also request.

The browser collects all the information and displays to your computer in the form of Web page

# Difference Between HTTP and HTTPS

| HTTP | HTTPS |
|------|------|
| HTTP stands for HyperText Transfer Protocol. | HTTPS stands for HyperText Transfer Protocol Secure. |
| In HTTP, the URL begins with `http://`. | In HTTPS, the URL starts with `https://`. |
| HTTP uses port number 80 for communication. | HTTPS uses port number 443 for communication. |
| HTTP is considered to be unsecure. | HTTPS is considered secure. |
| HTTP works at the Application Layer. | HTTPS works at the Transport Layer. |
| In HTTP, encryption is absent. | Encryption is present in HTTPS. |
| HTTP does not require any certificates. | HTTPS needs SSL Certificates. |
| HTTP does not improve search ranking. | HTTPS helps to improve search ranking. |
| HTTP is faster than HTTPS. | HTTPS is slightly slower due to encryption overhead. |
| HTTP does not use data hashing to secure data. | HTTPS encrypts data before transmission and decrypts it on the receiver side. |
| In HTTP, data is transferred in plaintext. | In HTTPS, data is transferred in ciphertext. |
| HTTP should be avoided. | HTTPS should be preferred. |
| Search engines do not favor insecure websites. | HTTPS improves a website's reputation in search engine rankings. |
| HTTP does not require SSL/TLS certificates. | HTTPS requires SSL/TLS implementation with certificates. |
| In HTTP, users may worry about their data security. | In HTTPS, users are confident about the security of their data. |


# Web servers

A **web server** is a combination of hardware and software that processes and delivers web content over the internet using **HTTP** and other protocols. It stores, processes, and serves webpages, images, videos, and applications to users upon request.  

A web server typically consists of:  
- **Hardware**: A physical computer that stores website files and is connected to the internet.  
- **Software**: A program that processes HTTP requests and delivers the requested content to a web browser.  

Web servers can be **static** (delivering fixed content) or **dynamic** (generating content in real time based on user input).  


# What is DNS?

The **Domain Name System (DNS)** is the phonebook of the Internet. It translates **human-readable domain names** (e.g., `nytimes.com`) into **IP addresses** that computers use to locate and communicate with each other over the web.

### Why is DNS important?
- Eliminates the need to memorize complex IP addresses.  
- Helps browsers find and load websites efficiently.  
- Supports both **IPv4** (e.g., `192.168.1.1`) and **IPv6** (e.g., `2400:cb00:2048:1::c629:d7a2`) addresses.  

Without DNS, users would have to enter numerical IP addresses instead of website names.


## Resources

- [Tutorialspoint - How the web works](https://www.tutorialspoint.com/web_developers_guide/web_how_it_works.htm)
- [Geeks For Geeks - Difference Between HTTP and HTTPS ](https://www.geeksforgeeks.org/difference-between-http-and-https-2/)
- [Tech Target- Web servers](https://www.techtarget.com/whatis/definition/Web-server)
- [CloudFlare - DNS ](https://www.cloudflare.com/learning/dns/what-is-dns/)
