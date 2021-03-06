# Tim Leavey
# Observer Pattern
# Description of this pattern at: https://en.wikipedia.org/wiki/Observer_pattern

class WeatherStation

  attr_accessor :temperature

  def initialize
    @temperature = 0
    @observers = []
  end

  def add_observer(observer)
    @observers << observer
  end

  def temperature=(new_temperature)
    @temperature = new_temperature
    @observers.each do |o|
      o.notify(self)
    end
  end

end

class StationObserver

  def notify(weatherstation)
    puts "#{weatherstation.temperature}"
  end
  
end

weather_station = WeatherStation.new
station_observer = StationObserver.new
weather_station.add_observer(station_observer)
weather_station.temperature = 72
