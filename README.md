# Magento Codecept Sandbox

This is a nice training repository to aqquaint someone with the development tools normally used for
Magento development and performing some work with an agency.


## Resources 

* [Codeception Getting Started Guide](https://codeception.com/docs/03-AcceptanceTests)
## Getting Started

1. [Install Warden](https://docs.warden.dev/installing.html#)
2. [Install Magento 2](https://docs.warden.dev/environments/magento2.html)
3. `warden sign-certificate app.codeception.test`
4. Start warden with `warden env up`
5. Start Selenium with `make selenium-start`
6. Trigger tests with `make run`

```bash
    make selenium-start
    make run
```

