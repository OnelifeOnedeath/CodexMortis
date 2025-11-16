FROM python:3.11

WORKDIR /app
COPY . .
RUN pip install -r requirements.txt

CMD ["python", "-c", "from serpens.core import Serpens; print(Serpens().analyze_chaos())"]
