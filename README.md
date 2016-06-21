This website uses [staticjinja](https://staticjinja.readthedocs.org/) to build top level html files, please use the instructions below to modify html files.

## Getting started

```
pip install staticjinja
```

To monitor your source directory for changes, and recompile files if they change, use `watch`:

```
staticjinja watch
```

This will recursively search `./templates` for templates (any file whose name does not start with `.` or `_`) and build them to `.`.

Commit both the rendered html and the file inside `/templates/`


## Contributors

* Ankur Gupta ([@ankur0493])
* Kartik Anand ([@kartikanand])
* Sanyam Khurana ([@CuriousLearner])
* Saurabh Kumar ([@theskumar])
* Sayan Chowdhury ([@sayanchowdhury])
* T K Sourabh ([@sourabhtk37])
* Vijay ([@vnbang2003])
* Vikalp Jain ([@vikalpj])

[@CuriousLearner]: https://github.com/CuriousLearner
[@sayanchowdhury]: https://github.com/sayanchowdhury
[@vikalpj]: https://github.com/vikalpj
[@vnbang2003]: https://github.com/vnbang2003
[@ankur0493]: https://github.com/ankur0493
[@kartikanand]: https://github.com/kartikanand
[@sourabhtk37]: https://github.com/sourabhtk37
[@theskumar]: https://github.com/theskumar
