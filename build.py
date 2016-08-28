#!/usr/bin/env python
from __future__ import absolute_import, unicode_literals

import json

from staticjinja import make_site


def get_schedule(file_path='data/schedule.json'):
    with open(file_path) as data_file:
        return json.load(data_file)


if __name__ == "__main__":
    site = make_site(contexts=[
        ('index.html', {
            "schedule": get_schedule()
        })
    ])
    # enable automatic reloading
    site.render(use_reloader=True)
