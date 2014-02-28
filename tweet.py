from tweepy import Stream
from tweepy import OAuthHandler
from tweepy.streaming import StreamListener
import time
import sys
import connector
import json
import formatting
ckey = ''
csecret = ''
atoken = ''
asecret = ''
totalTweets = 1
con = connector.dbconnect('localhost', 'root', '', 'twitboard')
class listener(StreamListener):
	def on_data(self, data):
		try:
			data = json.loads(data)
			try:
			   username = ("@" + str(data['user']['screen_name']))
			   tweet = tweet = str(data['text'])
			   time = str(data['created_at'])
			   time = formatting.datetimeformat(time)
			   print("Added tweet to database")
			   con.query("INSERT INTO tweets(text, time, user) VALUES('%s', '%s', '%s')" % (tweet, time, username))
			   time.sleep(5)
			except BaseException, e:
				return True
		except BaseException, e:
			time.sleep(5)
		
	def on_error(self, status):
		print("ERROR:::" + status)

auth = OAuthHandler(ckey, csecret)
auth.set_access_token(atoken, asecret)
twitterStream = Stream(auth, listener())
var = raw_input("Enter Search Filter: ")
print("Fetching all live tweets for filter: " + var)
twitterStream.filter(track=[var])