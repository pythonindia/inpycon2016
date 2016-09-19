#!/usr/bin/env python
from __future__ import absolute_import, unicode_literals

import json

from staticjinja import make_site


def get_schedule(file_path='data/schedule.json'):
    with open(file_path) as data_file:
        schedule =  json.load(data_file)
        i=0
        for day in schedule:
            events_list = []
            day_events = day['events']
            events_dict_in_list={}
            events_dict_in_list['talks'] = []
            event_time = day_events[0]['time']
            for event in day_events:
                if event_time == event['time']:
                    events_dict_in_list['time'] = event['time']
                    del event['time']
                    events_dict_in_list['talks'].append(event.copy())

                else:
                    events_list.append(events_dict_in_list)
                    events_dict_in_list = {}
                    events_dict_in_list['talks'] = []
                    events_dict_in_list['time'] = event['time']
                    event_time = event['time']
                    del event['time']
                    events_dict_in_list['talks'].append(event.copy())
            events_list.append(events_dict_in_list)
            schedule[i]['events'] = events_list
            i+=1
        return schedule


if __name__ == "__main__":
    site = make_site(contexts=[
        ('index.html', {
            "schedule": get_schedule()
        })
    ])
    # enable automatic reloading
    site.render(use_reloader=True)
