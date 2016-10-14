import praw
import ephem
import requests

user_agent = ("topRedditPost pyMachine 0.1")
submissionArray = []

weatherURL = 'http://www.yr.no/place/Norway/Sør-Trøndelag/Trondheim/Utleirvegen/hour_by_hour.html'
weatherURL1 = 'http://www.yr.no/place/Norway/Oslo/Oslo/Ljabru/hour_by_hour.html'
stringId = '<meta property="og:description" content="'

def getShowerThought():
	r = praw.Reddit(user_agent = user_agent)
	subreddit = r.get_subreddit("showerthoughts")
	
	for submission in subreddit.get_hot(limit = 5):
		submissionArray.append(submission.title)

	with open('/var/www/html/topSubPost.txt', 'w') as outputFile:
		print(submissionArray[2])
		outputFile.write(str(submissionArray[2]))

def timeOfDay():
	user = ephem.Observer()
	user.lat = '63.394079063'
	user.lon = '10.424076010'
	user.elevation = 118

	next_sunrise_datetime = user.next_rising(ephem.Sun()).datetime()
	next_sunset_datetime = user.next_setting(ephem.Sun()).datetime()

	if (next_sunset_datetime < next_sunrise_datetime):
		return "day"
	else:
		return "night"

def getWeatherReport():
	page = str(requests.get(weatherURL).content)
	idIndex = page.index(stringId) + len(stringId)
	forcastDescription = page[idIndex:idIndex + page[idIndex:].index('/>') - 2]
	forcastList = forcastDescription.split(', ')
	
	# Get the worded weather state
	weatherState = forcastList[0]
	while True:
		try:
			weatherState.index(':')
			weatherState = weatherState[weatherState.index(':') + 2:]
			pass
		except ValueError:
			forcastList[0] = weatherState + '.png'
			break

	# Get the temp value
	tempValue = forcastList[1]
	forcastList[1] = tempValue[12:]

	# Clean up any errors in the downpour
	try:
		forcastList[2] = forcastList[2].replace("\\xe2\\x80\\x93", "-")
	except ValueError:
		pass

	# Get the wind value and append the direction of the wind
	windValue = windDir = forcastList[4]
	windValue = windValue[:windValue.index('from') - 1]
	windDir = windDir[windDir.index('from') + len('from') + 1:]
	forcastList[4] = windValue
	forcastList.append(windDir)

	# Get the time of day
	forcastList.insert(0,timeOfDay())

	print(forcastList)
	with open('/var/www/html/weatherData.txt', 'w') as outputFile:
		for element in forcastList:
			outputFile.write(str(element) + '\n')

def main():
	getShowerThought()
	getWeatherReport()

main()
